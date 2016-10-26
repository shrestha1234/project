<?php

namespace Lost\Forms;

use Kris\LaravelFormBuilder\Form;

class searchfound extends Form
{
    public function buildForm()
    {
        $itemtypes=$this->getData('itemtypes');//logincontroller baata ayo
        $itemOptions=[];
        foreach($itemtypes->item_types as $itemtype)
            // print_r($itemtypes);die();

        {
            $itemOptions[$itemtype->id]=$itemtype->name;
        }
        $this
            ->add('Category','select',[
                'choices' => $itemOptions,
                /*'selected' => 'el',*/
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
