<?php
namespace Lost\Forms;

use Kris\LaravelFormBuilder\Form;

class founditem extends Form
{
    public function buildForm()
    {

        $this
            ->add('Date','date',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-6 form-control'],

            ])
            ->add('Category','select',[
                'choices' => ['el' => 'Electronics', 'do' => 'Document','je'=>'Jewelry','cl'=>'Clothing','an'=>'Animals','sp'=>'Sporting goods','ti'=>'Tickets','to'=>'Toys','ta'=>'Transportation','vi'=>'Visual Arts','ba'=>'Bags,Luggage,Baggage','Li'=>'Literature','ot'=>'Others'],
                'selected' => 'el',
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-6 form-control'],
            ])
            ->add('Sub Category','select',[
                'choices' => ['en' => 'mobile', 'fr' => 'French'],
                'selected' => 'en',
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-6 form-control'],

            ])

            ->add('Model','text',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-6 form-control'],

            ])

            ->add('Title','text',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-6 form-control'],
            ])
            ->add('Description','textarea',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-6 form-control'],
            ])
            ->add('Color','select',[
                'choices' => ['en' => 'Red', 'ye' => 'Yellow','bl' => 'Blue', 'gr' => 'Green','wh' => 'White', 'bla' => 'Black','br' => 'Brown', 'gl' => 'Gold'],
                'selected' => 'en',
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-6 form-control'],
            ])
            ->add('Address','text',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-6 form-control'],
            ])
            ->add('City/Town where item was lost','text',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-6 form-control'],

            ])
            ->add('Specific Location','text',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-6 form-control'],
            ])
            ->add('submit','submit',[
                'wrapper'=>['class'=>'form-group row'],
                'attr'=>['class'=>'btn btn-succus col-md-offset-4'],

                /*<button type="submit" class="btn btn-default">Submit</button>*/


            ]);
    }
}