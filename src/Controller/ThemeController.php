<?php

namespace App\Controller;

use App\Repository\QuestionRepository;
use App\Repository\ThemeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ThemeController extends AbstractController
{

    private ThemeRepository $themeRepository;
    private SerializerInterface $serializer;
    private QuestionRepository $questionRepository;

    /**
     * @param ThemeRepository $themeRepository
     * @param SerializerInterface $serializer
     * @param QuestionRepository $questionRepository
     */
    public function __construct(ThemeRepository $themeRepository, SerializerInterface $serializer, QuestionRepository $questionRepository)
    {
        $this->themeRepository = $themeRepository;
        $this->serializer = $serializer;
        $this->questionRepository = $questionRepository;
    }


    #[Route('/theme', name: 'app_theme')]
    public function getTheme(): Response
    {
      $theme = $this->themeRepository->findAll();
      $themeJson = $this->serializer->serialize(
          $theme, 'json',['groups'=>'get_theme']);
      return new Response($themeJson, Response::HTTP_OK,['content-type' => 'application/json']);
    }

}
