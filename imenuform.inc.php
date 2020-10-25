<?php

$myts = MyTextSanitizer::getInstance();
$title = htmlspecialchars($title, ENT_QUOTES | ENT_HTML5);
$link = htmlspecialchars($link, ENT_QUOTES | ENT_HTML5);
echo '<h4>' . _IM_IMENUADMIN . '</h4>';
$formtitle = new XoopsFormText(_IM_TITLE, 'title', 50, 150, $title);
$formlink = new XoopsFormText(_IM_LINK, 'link', 50, 255, $link);
$formhide = new XoopsFormSelect(_IM_HIDE, 'hide', $hide);
$formhide->addOption('0', _NO);
$formhide->addOption('1', _YES);
$formtarget = new XoopsFormSelect(_IM_TARGET, 'target', $target);
$formtarget->addOption('_self', _IM_TARG_SELF);
$formtarget->addOption('_blank', _IM_TARG_BLANK);
$formtarget->addOption('_parent', _IM_TARG_PARENT);
$formtarget->addOption('_top', _IM_TARG_TOP);
$formgroups = new XoopsFormSelectGroup(_IM_GROUPS, 'groups', true, $groups, 5, true);
$submit_button = new XoopsFormButton('', 'submit', _IM_SUBMIT, 'submit');

$form->addElement($formtitle, true);
$form->addElement($formlink, false);
$form->addElement($formhide);
$form->addElement($formtarget);
$form->addElement($formgroups);
$form->addElement(new XoopsFormHidden('id', $id));
$form->addElement(new XoopsFormHidden('op', 'update'));
$form->addElement($submit_button);
