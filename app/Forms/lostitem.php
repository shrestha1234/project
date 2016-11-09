<?php

namespace Lost\Forms;

use Kris\LaravelFormBuilder\Form;

class lostitem extends Form
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
            ->add('Date','date',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control'],

            ])
            ->add('Category','select',[
                'choices' => $itemOptions,
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control'],
            ])


            ->add('Model','text',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control'],

            ])

            ->add('Title','text',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control'],
            ])
            ->add('Description','textarea',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control'],
            ])
            ->add('Address','text',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control'],
            ])
            ->add('lost_place','text',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'label'=>'Place where item was lost',
                'attr'=>['class'=>'col-md-7 form-control'],

            ])
            ->add('Specific Location','text',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control'],
            ])
            ->add('Image','file',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control'],
            ])
            ->add('submit','submit',[
                'wrapper'=>['class'=>'form-group row'],
                'attr'=>['class'=>'btn btn-primary col-md-offset-4'],
            ])
            ->add('UserId','hidden',[
                'default_value'=>1
            ])
            ->add('ItemTypeId','hidden',[
                'default_value'=>1
            ]);
    }
}
