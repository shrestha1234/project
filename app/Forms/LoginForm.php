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
                'attr'=>['class'=>'col-md-7 form-control','placeholder'=>'Enter your Username'],
                'rules'=>['required']


            ])
            ->add('password','password',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7  form-control','placeholder'=>'Enter your Password'],
                'rules'=>['required','min:8'],
            ])
             ->add('remember_me', 'checkbox', [
                'value' => 1,
                'checked' => true
            ])

            ->add('clear', 'reset', ['label' => 'Clear form',
                'wrapper'=>['class'=>'form-group row'],
                        'attr'=>['class'=>'btn btn-warning col-md-offset-1']
            ])


            ->add('Login','submit',[
                'wrapper'=>['class'=>'form-group row'],
                'attr'=>['class'=>'btn btn-primary col-md-offset-1']
            ]);

    }
}
