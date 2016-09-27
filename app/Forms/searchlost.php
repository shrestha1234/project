<?php

namespace Lost\Forms;

use Kris\LaravelFormBuilder\Form;

class searchlost extends Form
{
    public function buildForm()
    {
        $this
        ->add('Category','select',[
        'choices' => ['el' => 'Electronics', 'do' => 'Document','je'=>'Jewelry','cl'=>'Clothing','an'=>'Animals','sp'=>'Sporting goods','ti'=>'Tickets','to'=>'Toys','ta'=>'Transportation','vi'=>'Visual Arts','ba'=>'Bags,Luggage,Baggage','Li'=>'Literature','ot'=>'Others'],
        'selected' => 'el',
        'wrapper'=>['class'=>'form-group row'],
        'label_attr'=>['class'=>'col-md-4 control-label'],
        'attr'=>['class'=>'col-md-7 form-control'],
        ])
        ->add('Sub Category','select',[
            'choices' => ['en' => 'mobile', 'fr' => 'French'],
            'selected' => 'en',
            'wrapper'=>['class'=>'form-group row'],
            'label_attr'=>['class'=>'col-md-4 control-label'],
            'attr'=>['class'=>'col-md-7 form-control'],

        ])

        ->add('Keyword','text',[
            'wrapper'=>['class'=>'form-group row'],
            'label_attr'=>['class'=>'col-md-4 control-label'],
            'attr'=>['class'=>'col-md-7 form-control'],

        ])
            ->add('Search','submit',[
                'wrapper'=>['class'=>'form-group row'],
                'attr'=>['class'=>'btn btn-success col-md-offset-1'],

        ]);
    }
}
