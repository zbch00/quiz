<?php

namespace App\Controller;

use App\Repository\QuestionRepository;
use App\Repository\ThemeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class QuestionController extends AbstractController
{
    private QuestionRepository $questionRepository;
    private ThemeRepository $themeRepository;

    /**
     * @param QuestionRepository $questionRepository
     * @param ThemeRepository $themeRepository
     */
    public function __construct(QuestionRepository $questionRepository, ThemeRepository $themeRepository)
    {
        $this->questionRepository = $questionRepository;
        $this->themeRepository = $themeRepository;
    }


    #[Route('/api/themes', name: 'app_themes', priority: 1)]
    public function themes(SerializerInterface $serializer): Response
    {
        $themes = $this->themeRepository->findAll();
        $themesJSON = $serializer->serialize($themes,'json',['groups' => 'themes']);
        return new Response($themesJSON, Response::HTTP_OK, ["content-type" => "application/json"]);
    }



    #[Route('/api/themes/{theme}/{nb_questions}', name: 'app_question')]
    public function questions($theme,$nb_questions, SerializerInterface $serializer): Response
    {
        $theme = $this->themeRepository->findOneBy(['libelle'=>$theme]);
        if (!$theme) {
            return $this->generateError("LE THEME N'EXISTE PAS",404);
        }
        $questions=$this->questionRepository->findBy(['theme'=>$theme]);
        shuffle($questions);
        $questions_tab = [];
        if ($nb_questions >= count($questions)) {
            $nb_questions = count($questions);
        }
        for ($i=$nb_questions;$i>=1;$i=$i-1){
            array_push($questions_tab,$questions[$i-1]);
        }

        $questions_themeJson = $serializer->serialize( $questions_tab,'json',['groups' => 'list_questions','themes']);
        return new Response($questions_themeJson, Response::HTTP_OK, ["content-type" => "application/json"]);
    }

    private function generateError(string $message, int $status) : Response {
        $erreur = [
            'status' => $status,
            'message' => $message
        ];
        return new Response(json_encode($erreur),$status,
            ["content-type" => "application/json"]
        );
    }
}