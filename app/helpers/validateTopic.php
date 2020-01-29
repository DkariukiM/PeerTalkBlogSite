<?php
/**
 * Created by PhpStorm.
 * User: Hp
 * Date: 1/26/2020
 * Time: 1:05 PM
 */
?>
<?php

function validateTopic($topic)
{
    $errors = array();
    if(empty($topic['name']))
    {
        array_push($errors, 'Topic name is required');
    }
    if(empty($topic['description']))
    {
        array_push($errors, 'Topic description is required');
    }

/*    $existingTopic = selectOne('topics', ['name' => $topic['name']] );
    if ($existingTopic)

    {
        array_push($errors, 'Topic name already exists');
    }*/
    $existingTopic = selectOne('topics', ['name' => $topic['name']] );
    if ($existingTopic)
    {
        if (isset($post['update-topic']) && $existingTopic['id'] != $topic['id'])
        {
            array_push($errors, 'Topic name already exists');
        }
        if (isset($post['add-topic'] ))
        {
            array_push($errors, 'Topic name already exists');
        }
    }


    return $errors;

}





