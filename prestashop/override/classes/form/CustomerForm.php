<?php
/**
 * 2007-2021 ETS-Soft
 *
 * NOTICE OF LICENSE
 *
 * This file is not open source! Each license that you purchased is only available for 1 wesite only.
 * If you want to use this file on more websites (or projects), you need to purchase additional licenses.
 * You are not allowed to redistribute, resell, lease, license, sub-license or offer our resources to any third party.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please contact us for extra customization service at an affordable price
 *
 * @author ETS-Soft <etssoft.jsc@gmail.com>
 * @copyright  2007-2020 ETS-Soft
 * @license    Valid for 1 website (or project) for each purchase of license
 *  International Registered Trademark & Property of ETS-Soft
 */
class CustomerForm extends CustomerFormCore
{
    /*
    * module: recaptcha
    * date: 2022-03-27 15:18:35
    * version: 1.0.0
    */
    public function validate()
    {
        if (Tools::isSubmit('submitCreate') && Module::isEnabled('recaptcha') && ($captcha = Module::getInstanceByName('recaptcha')) && $captcha->hookVal('register')) {
            $captchaField = $this->getField('captcha');
            $errors = array();
            $captcha->captchaVal($errors);
            if ($errors) {
                $captchaField->addError(implode(',', $errors));
            }
        }
        return parent::validate();
    }
}
