<?php
/**
 * Kurt Geiger MNP extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 *
 * @category   KurtGeiger
 * @package    KurtGeiger_Mnp
 * User: zoltan.nagy <zoltan.nagy@{kurtgeiger.com>
 * @copyright  Copyright (c) 2011 Kurt Geiger (http://www.kurtgeiger.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */


namespace KG\Bundle\MainCategoryBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Pim\Bundle\EnrichBundle\Form\Type\CategoryType as BaseCategoryType;

class CategoryType  extends BaseCategoryType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('maincategory', 'text',
            [
                'required' => true
            ]
        );
        parent::buildForm($builder, $options);
    }
}
