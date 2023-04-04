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
}