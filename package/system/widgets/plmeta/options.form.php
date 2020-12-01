<?php

class formWidgetPlmetaOptions extends cmsForm {

    public function init() {

        return array(

            array(
                'type' => 'fieldset',
                'title' => LANG_OPTIONS,
                'childs' => array(

                    new fieldString('options:otitle', array(
                        'title' => LANG_WD_PLMETA_TITLE,
                        'hint' => LANG_WD_PLMETA_TITLE_DESCR,
                        'default' => false
                    )),
                    new fieldString('options:okeywords', array(
                        'title' => LANG_WD_PLMETA_KEYWORDS,
                        'hint' => LANG_WD_PLMETA_KEYWORDS_DESCR,
                        'default' => false
                    )),
                    new fieldText('options:odescription', array(
                        'title' => LANG_WD_PLMETA_DESCRIPTION,
                        'hint' => LANG_WD_PLMETA_DESCRIPTION_DESCR,
                        'default' => false
                    )),

                )
            ),

        );

    }

}
