<?php
/* @var $this ItemController */
/* @var $data Item */
?>

<div class="view">

    <table>
        <tr>
            <td><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</td>
            <td><?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?></td>
        </tr>
        <tr>
            <td><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</td>
            <td><?php echo CHtml::encode($data->title); ?></td>
        </tr>
        <tr>
            <td><?php echo CHtml::encode($data->getAttributeLabel('teaser_image')); ?>:</td>
            <td><?php echo CHtml::image('/images/items/teasers/' . $data->teaser_image, "image") ?></td>
        </tr>
        <tr>
            <td><?php echo CHtml::encode($data->getAttributeLabel('index_teaser_image')); ?>:</td>
            <td><?php echo CHtml::image('/images/items/index_teasers/' . $data->index_teaser_image, "image") ?></td>
        </tr>
        <tr>
            <td><?php echo CHtml::encode($data->getAttributeLabel('slider_teaser_image')); ?>:</td>
            <td><?php echo CHtml::image('/images/items/slider_teasers/' . $data->slider_teaser_image, "image") ?></td>
        </tr>
        <tr>
            <td><?php echo CHtml::encode($data->getAttributeLabel('teaser_text')); ?>:</td>
            <td><?php echo CHtml::encode($data->teaser_text); ?></td>
        </tr>
        <tr>
            <td><?php echo CHtml::encode($data->getAttributeLabel('genres')); ?>:</td>
            <td><?php

                if(count($data->genres)) {
                    foreach($data->genres as $genre) {
                        echo CHtml::encode($genre->title) . "&nbsp;";
                    }
                }

                ?></td>
        </tr>
        <tr>
            <td><?php echo CHtml::encode($data->getAttributeLabel('trailer')); ?>:</td>
            <td><?php echo CHtml::encode($data->trailer); ?></td>
        </tr>
        <tr>
            <td><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</td>
            <td><?php echo CHtml::encode($data->description); ?></td>
        </tr>
        <tr>
            <td><?php echo CHtml::encode($data->getAttributeLabel('order')); ?>:</td>
            <td><?php echo CHtml::encode($data->order); ?></td>
        </tr>
        <tr>
            <td><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</td>
            <td><?php echo CHtml::encode($data->created); ?></td>
        </tr>
    </table>

</div>