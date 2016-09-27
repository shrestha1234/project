<?php

namespace Lost\Forms;

use Kris\LaravelFormBuilder\Form;

class RegisterForm extends Form
{
    public function buildForm()
    {
        $this
        ->add('First Name','text',[
        'wrapper'=>['class'=>'form-group row'],
        'label_attr'=>['class'=>'col-md-4 control-label'],
            'attr'=>['class'=>'col-md-7 form-control','placeholder'=>'Enter your First Name']

    ])
        ->add('Last Name','text',[
            'wrapper'=>['class'=>'form-group row'],
            'label_attr'=>['class'=>'col-md-4 control-label'],
            'attr'=>['class'=>'col-md-7 form-control','placeholder'=>'Enter your Last Name']

        ])
            ->add('Email','email',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control','placeholder'=>'Enter your Email']

            ])

            ->add('locality','text',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control','placeholder'=>'Enter your Locality']

            ])
            ->add('Phone no','text',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control','placeholder'=>'Enter your Phone Number']])


            ->add('country','select', [
                'wrapper'=>['class'=>'form-group row'],
                'choices' => [ 'Nepal','India','China','Pakistam'],
                'selected' => 'Nepal',
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control','placeholder'=>'Select your country'],

            ])
            ->add('State','select', [
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control','placeholder'=>'Select your State'],

            ])
            ->add('Zone','select', [
                'wrapper'=>['class'=>'form-group row'],
                'choices' => [ 'Bagmati','Narayani','gandaki',],
                'selected' => 'Bagmati',
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control','placeholder'=>'Select your Zone'],

            ])
            ->add('District','select', [
                'wrapper'=>['class'=>'form-group row'],
                'choices' => [ 'Kathmandu','Bhaktapur','Lalitpur',],
                'selected' => 'Nepal',
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control','placeholder'=>'Select your District'],

            ])
            ->add('Locality','text', [
                'wrapper'=>['class'=>'form-group row'],

                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control','placeholder'=>'Select your country'],

            ])

            ->add('clear', 'reset', ['label' => 'Clear form',
                'wrapper'=>['class'=>'form-group row'],
                'attr'=>['class'=>'btn btn-warning col-md-offset-1']
            ])

            ->add('Login','submit',[
            'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
            'attr'=>['class'=>'btn btn-primary col-md-offset-1']
        ]);

    }
}
