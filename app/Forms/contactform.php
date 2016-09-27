<?php

namespace Lost\Forms;

use Kris\LaravelFormBuilder\Form;

class contactform extends Form
{
    public function buildForm()
    {
        $this

            ->add('Name','text',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control']

            ])
            ->add('Email','email',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control']

            ])
            ->add('Subject','text',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control']

            ])
            ->add('Message','textarea',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control']

            ])

            ->add('submit','submit',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'btn btn-success col-md-offset-1']
            ]);

    }
}
