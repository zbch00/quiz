<?php

namespace App\Controller;

use App\Repository\QuestionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class QuestionController extends AbstractController
{
    private SerializerInterface $serializer;
    private QuestionRepository $questionRepository;


    /**
     * @param SerializerInterface $serializer
     * @param QuestionRepository $questionRepository
     */
    public function __construct(SerializerInterface $serializer, QuestionRepository $questionRepository)
    {
        $this->serializer = $serializer;
        $this->questionRepository = $questionRepository;
    }
    #[Route('/api/themes', name: 'app_themes', priority: 1)]
    public function themes(SerializerInterface $serializer): Response
    {
        $themes = $this->themeRepository->findAll();
        $themesJSON = $serializer->serialize($themes,'json',['groups' => 'list_themes']);
        return new Response($themesJSON, Response::HTTP_OK, ["content-type" => "application/json"]);
    }



    #[Route('/api/themes/{theme}/{nb_questions}', name: 'app_question')]
    public function questions($theme,$nb_questions, SerializerInterface $serializer): Response
    {
        $theme = $this->themeRepository->findOneBy(['libelle'=>$theme]);
        $questions=$this->questionRepository->findBy(['theme'=>$theme]);
        shuffle($questions);
        $questions_tab = [];
        if ($nb_questions >= count($questions)) {
            $nb_questions = count($questions);
        }
        for ($i=$nb_questions;$i>=1;$i=$i-1){
            array_push($questions_tab,$questions[$i-1]);
        }

        $questions_themeJson = $serializer->serialize( $questions_tab,'json',['groups' => 'par_themes']);

        return new Response($questions_themeJson, Response::HTTP_OK, ["content-type" => "application/json"]);
    }
}