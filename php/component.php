<?php

function inputElementForText($icon,$type,$placeholder,$id,$name,$pattern) {
    $ele = "
            <div class='input-group'>
                <span class='input-group-text' id='basic-addon1'>$icon</span>
                <input type='$type' class='form-control' placeholder='$placeholder' id='$id' name='$name' pattern='$pattern'>
            </div>
    ";

    echo $ele;
}


function inputElementForNumber($icon1,$type,$placeholder,$id,$name,$pattern,$icon2) {
    $ele = "
            <div class='input-group'>
                <span class='input-group-text' id='basic-addon1'>$icon1</span>
                <input type='$type' class='form-control' placeholder='$placeholder' id='$id' name='$name' pattern='$pattern'>
                <div class='input-group-append'>
                    <span class='input-group-text input-group-text-secondary'>$icon2</span>
                </div>
            </div>
    ";

    echo $ele;
}


function buttonElement($class,$type,$name,$icon,$value) {
    $btn = "
            <button class='$class' type='$type' name='$name'>$icon $value</button>
    ";

    echo $btn;
}


function anchorElement($href,$class,$toggle,$placement,$title,$icon) {
    $acr = "
            <a href='$href' class='$class' data-toggle='$toggle' data-placement='$placement' title='$title'>$icon</a>
    ";

    echo $acr;
}
