<?php

namespace Lost\Forms;

use Kris\LaravelFormBuilder\Form;

class LoginForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('email','text',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control','placeholder'=>'Enter your Email'],
                'rules'=>['required']


            ])
            ->add('password','password',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7  form-control','placeholder'=>'Enter your Password'],
                'rules'=>['required','min:5'],
            ])
             ->add('remember_me', 'checkbox', [
                'value' => 1,
                'checked' => false,
            ])


            ->add('Login','submit',[
                'wrapper'=>['class'=>'form-group row'],
                'attr'=>['class'=>'btn btn-primary col-md-offset-9']
            ]);

    }
}
