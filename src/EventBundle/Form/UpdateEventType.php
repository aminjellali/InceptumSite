<?php

namespace EventBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\DateTime;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Vich\UploaderBundle\Form\Type\VichImageType;

class UpdateEventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {


        $builder
            ->add('address',TextType::class,[ 'attr'=>['class'=>'text-center form-control'],'required'=>true,'label'=>false])
            ->add('lat')
            ->add('longx')
            ->setMethod('post')
            ->add('Modifier',SubmitType::class,[ 'attr'=>['class'=>'btn btn-default']]);
        }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

    public function getName()
    {
        return 'member_bundle_add_event_type';
    }
}
