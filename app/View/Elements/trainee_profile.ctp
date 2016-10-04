<div class="tab-content element-trainee-profile">
  <div class="tab-pane fade in active" id="tab-profile-basic">
    <div class="table-responsive maxW1200">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 mB10">
          <button type="button" class="btn btn-info">
            <?php echo $this->Html->link(
              '<i class="fa fa-print"></i> CV(JP)',
              array('controller' => 'output_documents', 'action' => 'printout_cv',$this->request->data['Trainee']['id'], "cv_jp"),
              array('escape' => false, 'class' => 'white', 'target' => '_blank')
            ) ?>
          </button>
          <button type="button" class="btn btn-info">
            <?php echo $this->Html->link(
              '<i class="fa fa-print"></i> CV(EN)',
              array('controller' => 'output_documents', 'action' => 'printout_cv',$this->request->data['Trainee']['id'], "cv_en"),
              array('escape' => false, 'class' => 'white', 'target' => '_blank')
            ) ?>
          </button>
          <button type="button" class="btn btn-info">
            <?php echo $this->Html->link(
              '<i class="fa fa-print"></i> CV for Interview(JP)',
              array('controller' => 'output_documents', 'action' => 'printout_cv',$this->request->data['Trainee']['id'], "cv_interview_jp"),
              array('escape' => false, 'class' => 'white', 'target' => '_blank')
            ) ?>
          </button>
        </div>
      </div>

      <?php echo $this->Form->create('Trainee', array(
        'action' => 'updateBasicAjax',
        'class' => 'form_trainee_edit form_basic',
        'inputDefaults' => array(
          'div' => false,
          )
      )); ?>
      <?php echo $this->Form->hidden('id'); ?>
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th><span></span></th>
              <th class="text-center maxW300"><span>日本語</span></th>
              <th class="text-center maxW500"><span>English</span></th>
              <th class="text-center maxW300"><span>Khmer</span></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="td_first_block">
                <?= __('Trainee ID') ?>
              </td>
              <td>
                <?php echo $this->request->data['Trainee']['control_no'];?>
              </td>
              <td>

              </td>
              <td>

              </td>
            </tr>
            <tr>
              <td class="td_first_block">
                <?= __('Date In') ?>
              </td>
              <td>
              </td>
              <td>
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <?php echo $this->Form->date('date_in',array(
                      'label' => false,
                      'class' => 'form-control maxW200 date_in',
                    )) ?>
                  </div>
                </div>
              </td>
              <td>

              </td>
            </tr>
            <tr>
              <td class="td_first_block">
                <?= __('ID Number') ?>
              </td>
              <td>
                <?php echo $this->Form->input('id_number',array(
                  'label' => false,
                  'class' => 'form-control maxW120 id_number'
                )) ?>
              </td>
              <td>

              </td>
              <td>

              </td>
            </tr>
            <tr>
              <td class="td_first_block">
                <?= __('Name') ?>
              </td>
              <td>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <label for="family_name_jp">名字</label>
                    <?php echo $this->Form->input('family_name_jp',array(
                      'label' => false,
                      'class' => 'form-control family_name_jp'
                    )) ?>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                  <label for="given_name_jp">名前</label>
                    <?php echo $this->Form->input('given_name_jp',array(
                      'label' => false,
                      'class' => 'form-control given_name_jp'
                    )) ?>
                  </div>
                </div>
              </td>
              <td>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <label for="family_name_en">Family Name</label>
                    <?php echo $this->Form->input('family_name_en',array(
                      'label' => false,
                      'class' => 'form-control maxW200 family_name_en'
                    )) ?>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <label for="given_name_en">Given Name</label>
                    <?php echo $this->Form->input('given_name_en',array(
                      'label' => false,
                      'class' => 'form-control maxW200 given_name_en'
                    )) ?>
                  </div>
                </div>
              </td>
              <td>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <label for="family_name_kh">Family Name(Khmer)</label>
                    <?php echo $this->Form->input('family_name_kh',array(
                      'label' => false,
                      'class' => 'form-control family_name_kh'
                    )) ?>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <label for="given_name_kh">Given Name(Khmer)</label>
                    <?php echo $this->Form->input('given_name_kh',array(
                      'label' => false,
                      'class' => 'form-control given_name_kh'
                    )) ?>
                </div>
              </td>
            </tr>
            <tr>
              <td class="td_first_block">
                <?= __('Introduced From') ?>
              </td>
              <td>

              </td>
              <td>
                <?php echo $this->Form->input('introduced_from',array(
                  'label' => false,
                  'class' => 'form-control introduced_from'
                )) ?>
              </td>
              <td>
              </td>
            </tr>
            <tr>
              <td class="td_first_block">
                <?= __('Sex') ?>
              </td>
              <td>
                <?php if($this->request->data['Trainee']['sex']=='male'){echo "男";}
                  elseif($this->request->data['Trainee']['sex']=='female'){echo "女";};
                ?>
              </td>
              <td>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <?php echo $this->Form->input('sex', array(
                      'label' => false,
                      'class' => 'form-control maxW100 sex',
                      'type' => 'select',
                      'options' => array('male' => __('Male'), 'female' => __('Female'))
                    )) ?>
                  </div>
                </div>
              </td>
              <td>
              </td>
            </tr>
            <tr>
              <td class="td_first_block">
                <?= __('Birthday') ?>
              </td>
              <td>
                <?php
                  $birthday = $this->request->data['Trainee']['birthday'];
                  $birthday_time = date('Y-m-d', strtotime($birthday));
                  list($y['y'], $m['m'], $d['d']) = explode('-', $birthday_time);
                  echo $y['y']."年".$m['m']."月" . $d['d'] ."日"."(".$this->Btn->calcAge($birthday)."歳".")";
                  ?>
              </td>
              <td>
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <?php echo $this->Form->date('birthday',array(
                      'label' => false,
                      'class' => 'form-control maxW200 birthday',
                    )) ?>
                  </div>
                </div>
              </td>
              <td>

              </td>
            </tr>
            <tr>
              <td class="td_first_block">
                <?= __('Marriage') ?>
              </td>
              <td>
                <?php if($this->request->data['Trainee']['married']=='0'){echo "未婚";}
                  elseif($this->request->data['Trainee']['married']=='1'){echo "既婚";};
                ?>
              </td>
              <td>
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <?php echo $this->Form->input('married', array(
                      'label' => false,
                      'class' => 'form-control maxW100 married',
                      'type' => 'select',
                      'options' => array('single' => __('Single'), 'married' => __('Married'))
                    )) ?>
                  </div>
                </div>
              </td>
              <td>

              </td>
            </tr>
            <tr>
              <td class="td_first_block">
                <?= __('Brothers') ?>
              </td>
              <td>

              </td>
              <td>
                <div class="row">
                  <div class="form-group">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <label class="" for="brother_cnt"><?= __('How many brothers?')?></label>
                      <?php echo $this->Form->input('brother_cnt',array(
                        'label' => false,
                        'class' => 'form-control brother_cnt'
                      )) ?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <label  class="" for="brother_index"><?= __('How manieth brother?')?></label>
                      <?php echo $this->Form->input('brother_index',array(
                        'label' => false,
                        'class' => 'form-control brother_index'
                      )) ?>
                    </div>
                  </div>
                </div>
              </td>
              <td>

              </td>
            </tr>

            <tr>
              <td class="td_first_block">
                <?= __('Birthplace') ?>
              </td>
              <td>

              </td>
              <td>
                <div class="row">
                  <div class="form-group form-group-select2">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <label for="TraineeBirthplaceProvinceId">Province</label>
                      <?php echo $this->Form->input('birthplace_province_id', array(
                        'label' => false,
                        'type' => 'select',
                        'div' => false,
                        'class' => 'form-control cam_province_id birthplace_province_id',
                        'value' => $this->request->data['Trainee']['birthplace_province_id'],
                        'options' => $option_provinces,
                        'empty' => __('--Select Province--')
                      )) ?>
                    </div>
                  </div>
                </div>
              </td>
              <td>

              </td>
            </tr>
            <tr>
              <td class="td_first_block">
                <?= __('Current Address') ?>
              </td>
              <td>
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group">
                        <?php echo $province_en['CamPlaceDic']['place_jp']." 県 "; ?>
                        <?php echo $district_en['CamPlaceDic']['place_jp']." 市 "; ?>
                        <?php echo $commune_en['CamPlaceDic']['place_jp']." 地区"; ?>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group">
                      <?php echo $this->Form->input('address_jp',array(
                        'label' => false,
                        'class' => 'form-control address_jp',
                        'placeholder' => '住所(地区以下、通り、番号、建物)'
                      )) ?>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                      <?php echo $this->Form->input('district_part_jp',array(
                        'label' => false,
                        'class' => 'form-control district_part_jp',
                        'placeholder' => '北部、中部、南部など'
                      )) ?>
                    </div>
                  </div>
                </div>
              </td>
              <td>
                <div class="row ">
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group ">
                      <label for="TraineeProvinceId">Province</label>
                      <?php echo $this->Form->input('province_id', array(
                        'label' => false,
                        'type' => 'select',
                        'div' => false,
                        'class' => 'form-control cam_province_id province_id',
                        'value' => $this->request->data['Trainee']['province_id'],
                        'options' => $option_provinces,
                        'empty' => __('--Select Province--')
                      )) ?>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group ">
                      <label for="TraineeDistrictId">District</label>
                      <?php echo $this->Form->input('district_id', array(
                        'label' => false,
                        'type' => 'select',
                        'div' => false,
                        'class' => 'form-control cam_district_id district_id',
                        'value' => $this->request->data['Trainee']['district_id'],
                        'options' => $option_districts,
                        'empty' => __('--Select District--')
                      )) ?>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group ">
                      <label for="TraineeCommuneId">Commune</label>
                      <?php echo $this->Form->input('commune_id', array(
                        'label' => false,
                        'type' => 'select',
                        'div' => false,
                        'class' => 'form-control cam_commune_id commune_id',
                        'value' => $this->request->data['Trainee']['commune_id'],
                        'options' => $option_communes,
                        'empty' => __('--Select Commune--')
                      )) ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group">
                      <label for="addressEn">Address(No, Street, Village, English)</label>
                      <?php echo $this->Form->input('address_en',array(
                        'label' => false,
                        'class' => 'form-control address_en'
                      )) ?>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                      <label for="district_part">District Area</label>
                      <?php echo $this->Form->input('district_part_en',array(
                        'label' => false,
                        'class' => 'form-control district_part_en'
                      )) ?>
                    </div>
                  </div>
                </div>
              </td>
              <td>
                <div class="row">
                  <div class="form-group">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <?php echo $this->Form->input('address_kh',array(
                        'label' => false,
                        'class' => 'form-control address_kh',
                        'placeholder' => __('Address(No, Street, Village, Khmer)')
                      )) ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <span style="font-size: 16px;">
                        <?php echo $commune_en['CamPlaceDic']['place_kh'].", "; ?>
                        <?php echo $district_en['CamPlaceDic']['place_kh'].", "; ?>
                        <?php echo $province_en['CamPlaceDic']['place_kh'].", "; ?>
                      </span>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td class="td_first_block">
                <?= __('Phone') ?>
              </td>
              <td>
              </td>
              <td>
                <?php echo $this->Form->input('phone',array(
                        'label' => false,
                        'class' => 'form-control  phone'
                      )) ?>
              </td>
              <td>

              </td>
            </tr>
            <tr>
              <td class="td_first_block">
                <?= __('Languages') ?>
              </td>
              <td>
                <p style="margin-bottom: 24px;">日本語 <?php if($this->request->data['Trainee']['english']==1){echo "、英語";} ?></p>
                <?php echo $this->Form->input('lang_others_jp',array(
                        'label' => false,
                        'class' => 'form-control maxW160 lang_others_jp'
                      )) ?>
                <label for="lang_others_jp"> その他</label>
              </td>

              <td>
                <label>English
                  <?php echo $this->Form->checkbox('english', array(
                    'label' => false,
                    'value' => 1,
                    'selected' => $this->request->data['Trainee']['english'],
                    'class' => 'english'
                  )) ?>
                </label>
                <?php echo $this->Form->input('lang_others_en',array(
                  'label' => false,
                  'class' => 'form-control maxW160 lang_others_en'
                )) ?>
                <label for="lang_others_en"> others</label>

              </td>
              <td>

              </td>
            </tr>

            <tr>
              <td class="td_first_block">
                <?= __('Facebook User ID') ?>
              </td>
              <td>
                <!-- <a href="http://facebook.com/<?php //echo $this->request->data['Trainee']['facebook'] ?>" target="_blank" ><?php // echo $this->request->data['Trainee']['facebook'] ?></a> -->
              </td>
              <td>
                <?php echo $this->Form->input('facebook',array(
                  'label' => false,
                  'class' => 'form-control facebook',
                  'placeholder' => __('Enter Facebook User ID')
                )) ?>
              </td>
              <td>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="profile-message-btn center-block text-right">
          <button type="button" class="btn btn-default update_basic_btn">
            <i class="fa fa-pencil"></i>
            <?= __('Save') ?>
          </button>
        </div>
      <?php echo $this->Form->end(); ?>
    </div>

  </div>
  <div class="tab-pane fade" id="tab-profile-personality">
    <div class="table-responsive maxW960">
      <?php echo $this->Form->create('Trainee', array(
        'action' => 'updatePersonalityAjax',
        'class' => 'form_trainee_edit form_personality',
        'inputDefaults' => array(
          'div' => false,
          )
      )); ?>
      <?php echo $this->Form->hidden('id'); ?>
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th style="width:100px"></th>
              <th style="width:100px"></th>
              <th style="width:100px"></th>
              <th style="width:100px"></th>
              <th style="width:200px"></th>
              <th style="width:100px"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="td_first_block">
                <?php echo $this->Form->input('height',array(
                  'label' => __('Height(cm)'),
                  'class' => 'form-control maxW100 height'
                )) ?>
              </td>
              <td>
                <?php echo $this->Form->input('weight',array(
                  'label' => __('Weight(kg)'),
                  'class' => 'form-control maxW100 weight'
                )) ?>
              </td>
              <td>
                <?php echo $this->Form->input('shoe_size',array(
                  'label' => __('Shoe Size(cm)'),
                  'class' => 'form-control maxW100 shoe_size'
                )) ?>
              </td>
              <td>
                <?php echo $this->Form->input('handed',array(
                  'label' => __('Handedness'),
                  'class' => 'form-control maxW100 handed',
                  'type' => 'select',
                  'options' => array('right' => __('Right'), 'left' => __('Left')),
                  'empty' => true
                )) ?>
              </td>
              <td style="width:100px">
                <div class="row">
                  <div class="form-group">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <?php echo $this->Form->input('eyesight_left',array(
                        'label' => __('Eyesight Left'),
                        'class' => 'form-control maxW100 eyesight_left',
                      )) ?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <?php echo $this->Form->input('eyesight_right',array(
                        'label' => __('Eyesight right'),
                        'class' => 'form-control maxW100 eyesight_right',
                      )) ?>
                    </div>
                  </div>
                </div>
              </td>
              <td style="width:150px">
                <?php echo $this->Form->input('color_blindness',array(
                  'label' => __('Color Blindness'),
                  'class' => 'form-control maxW100 color_blindness',
                  'type' => 'select',
                  'options' => array('0' => __('Nothing'), '1' => __('Have'))
                )) ?>
              </td>
            </tr>
            <tr colspan="6">
              <td class="td_first_block">
                <?php echo $this->Form->input('blood_type',array(
                  'label' => __('Blood Type'),
                  'class' => 'form-control maxW100 blood_type',
                  'type' => 'select',
                  'options' => array('a' => __('A'), 'b' => __('B'), 'o' => __('O'), 'ab' => __('AB')),
                  'empty' => true
                )) ?>
              </td>
              <td>
                <?php echo $this->Form->input('tatoo',array(
                  'label' => __('Tatoo'),
                  'class' => 'form-control maxW100 tatoo',
                  'type' => 'select',
                  'options' => array('0' => __('Nothing'), '1' => __('Have'))
                )) ?>
              </td>
              <td>
                <?php echo $this->Form->input('tabacco',array(
                  'label' => __('Tabacco'),
                  'class' => 'form-control maxW100 tabacco',
                  'type' => 'select',
                  'options' => array('0' => __('Nothing'), '1' => __('Have'))
                )) ?>
              </td>
              <td>
                <?php echo $this->Form->input('drink',array(
                  'label' => __('Alchole'),
                  'class' => 'form-control maxW100 drink',
                  'type' => 'select',
                  'options' => array('0' => __('Nothing'), '1' => __('Have'))
                )) ?>
              </td>

              <td>
                <?php echo $this->Form->input('experience_group_life',array(
                  'label' => __('Experience Group Life'),
                  'class' => 'form-control maxW100 experience_group_life',
                  'type' => 'select',
                  'options' => array('0' => __('Nothing'), '1' => __('Have'))
                )) ?>
              </td>
              <td>
                <div class="profile-message-btn center-block text-center">
                  <button type="button" class="btn btn-default update_personality_btn">
                    <i class="fa fa-pencil"></i>
                    <?= __('Save') ?>
                  </button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      <?php echo $this->Form->end(); ?>
    </div>
    <div class="table-responsive maxW960">
      <?php echo $this->Form->create('Trainee', array(
        'action' => 'updatePersonality2Ajax',
        'class' => 'form_trainee_edit form_personality_2',
        'inputDefaults' => array(
          'div' => false,
          )
      )); ?>
      <?php echo $this->Form->hidden('id'); ?>
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th style="width:200px;"><span></span></th>
              <th class="text-center"><span>日本語</span></th>
              <th class="text-center"><span>English</span></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="td_first_block">
                <?= __('Face Features') ?>
              </td>
              <td>
                <?php echo $this->Form->input('face_feature_jp',array(
                        'label' => false,
                        'class' => 'form-control face_feature_jp'
                      )) ?>
              </td>
              <td>
                <?php echo $this->Form->input('face_feature_en',array(
                        'label' => false,
                        'class' => 'form-control face_feature_en'
                      )) ?>
              </td>

            </tr>


            <tr>
              <td class="td_first_block">
                <?= __('Health (Hepatitis B,AIDS)') ?>
              </td>
              <td>
                <?php echo $this->Form->input('health_jp',array(
                        'label' => false,
                        'class' => 'form-control health_jp'
                      )) ?>
              </td>
              <td>
                <?php echo $this->Form->input('health_en',array(
                        'label' => false,
                        'class' => 'form-control health_en'
                      )) ?>
              </td>
            </tr>


            <tr>
              <td class="td_first_block">
                <?= __('Good Point') ?>
              </td>
              <td>
                <?php echo $this->Form->input('good_point_jp',array(
                        'label' => false,
                        'class' => 'form-control good_point_jp'
                      )) ?>
              </td>
              <td>
                <?php echo $this->Form->input('good_point_en',array(
                        'label' => false,
                        'class' => 'form-control good_point_en'
                      )) ?>
              </td>
            </tr>
            <tr>
              <td class="td_first_block">
                <?= __('Bad Point') ?>
              </td>
              <td>
                <?php echo $this->Form->input('bad_point_jp',array(
                        'label' => false,
                        'class' => 'form-control bad_point_jp'
                      )) ?>
              </td>
              <td>
                <?php echo $this->Form->input('bad_point_en',array(
                        'label' => false,
                        'class' => 'form-control bad_point_en'
                      )) ?>
              </td>
            </tr>
            <tr>
              <td class="td_first_block">
                <?= __('Hobby') ?>
              </td>
              <td>
                <?php echo $this->Form->input('hobby_jp',array(
                        'label' => false,
                        'class' => 'form-control hobby_jp'
                      )) ?>
              </td>
              <td>
                <?php echo $this->Form->input('hobby_en',array(
                        'label' => false,
                        'class' => 'form-control hobby_en'
                      )) ?>
              </td>
            </tr>
            <tr>
              <td class="td_first_block">
                <?= __('Character') ?>
              </td>
              <td>
                <?php echo $this->Form->input('character_jp',array(
                        'label' => false,
                        'class' => 'form-control character_jp'
                      )) ?>
              </td>
              <td>
                <?php echo $this->Form->input('character_en',array(
                        'label' => false,
                        'class' => 'form-control character_en'
                      )) ?>
              </td>
            </tr>
            <tr>
              <td class="td_first_block">
                <?= __('Specialty') ?>
              </td>
              <td>
                <?php echo $this->Form->input('specialty_jp',array(
                        'label' => false,
                        'class' => 'form-control specialty_jp'
                      )) ?>
              </td>
              <td>
                <?php echo $this->Form->input('specialty_en',array(
                        'label' => false,
                        'class' => 'form-control specialty_en'
                      )) ?>
              </td>
            </tr>
            <tr>
              <td class="td_first_block">
                <?= __('Religious') ?>
              </td>
              <td>
                <?php echo $this->Form->input('religious_jp',array(
                        'label' => false,
                        'class' => 'form-control religious_jp'
                      )) ?>
              </td>
              <td>
                <?php echo $this->Form->input('religious_en',array(
                        'label' => false,
                        'class' => 'form-control religious_en'
                      )) ?>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="profile-message-btn center-block text-right">
          <button type="button" class="btn btn-default update_personality_2_btn">
            <i class="fa fa-pencil"></i>
            <?= __('Save') ?>
          </button>
        </div>
      <?php echo $this->Form->end(); ?>
    </div>
  </div>

  <div class="tab-pane fade" id="tab-profile-family">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 maxW550">
        <div class="main-box">
          <header class="main-box-header clearfix">
            <h2><?= __('Add Family') ?></h2>
          </header>
          <div class="main-box-body clearfix">
            <?php echo $this->Form->create('TraineeFamily', array(
              'action' => 'addAjax',
              'class' => 'form_add_family',
              'inputDefaults' => array(
                'div' => false,
                )
            )); ?>
            <?php echo $this->Form->hidden('trainee_id', array(
              'value' => $this->request->data['Trainee']['id'],
              'class' => 'family_trainee_id'
              )); ?>
              <div class="row">
                <div class="form-group col-lg-3 col-md-3 col-sm-3" style="">
                  <label for="family_name_full" class=""><?= __('Full Name') ?></label>
                  <?php echo $this->Form->input('name',array(
                    'label' => false,
                    'class' => 'form-control maxW160 family_name',
                    'required' =>true
                  )) ?>
                </div>

                <div class="form-group col-lg-3 col-md-3 col-sm-3">
                  <label for="" class=""><?= __('Relationship') ?></label>
                  <?php echo $this->Form->input('relationship',array(
                    'label' => false,
                    'type' => 'select',
                    'options' => array(
                      'husband' => __('Husband'),
                      'wife' => __('Wife'),
                      'father'        =>  __('Father'),
                      'mother'        =>  __('Mother'),
                      'son'         =>  __('Son'),
                      'daughter'          =>  __('Daughter'),
                      'brother'       =>  __('Brother'),
                      'sister'        =>  __('Sister'),
                      'young brother' =>  __('Young Brother'),
                      'young sister'  =>  __('Young Sister'),
                      'grandfather'   =>  __('Grandfather'),
                      'grandmather'   =>  __('Grandmather'),
                      'grandson'    =>  __('Grandson'),
                      'granddaughter'   =>  __('Granddaughter'),
                      'father in law' =>  __('Father in law'),
                      'mother in law' =>  __('Mother in law'),
                      'uncle'         =>  __('Uncle'),
                      'aunt'          =>  __('Aunt'),
                      'nephew'        =>  __('Nephew'),
                      'niece'         =>  __('Niece')
                       ),
                    'class' => "form-control maxW160 family_relationship",
                    'required' =>true,
                    'empty' => true
                  )); ?>
                </div>
                <div class="form-group col-lg-4 col-md-4 col-sm-4">
                  <label for="" class=""><?= __('Birthday') ?></label>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    <?php echo $this->Form->date('birthday', array(
                      'label' => false,
                      'div' => false,
                      'class' => 'form-control maxW160 family_birthday'
                    )) ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-lg-3 col-md-3 col-sm-3">
                  <label for="" class=""><?= __('Phone') ?></label>
                  <?php echo $this->Form->input('phone', array(
                    'label' => false,
                    'class' => 'form-control maxW160 family_phone',
                  )) ?>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                  <div class="form-group form-group-select2">
                    <?php echo $this->Form->input('job_id',array(
                      'label' => __('Job'),
                      'type' => 'select',
                      'options' => $option_jobs,
                      'class' => "form-control sel_job_family family_job_id",
                      'div' => false,
                      'style' => 'width:200px;',
                      'empty' => __('--Select Job--')
                    )); ?>

              <button type="button" class="btn btn-success family_register_btn pull-right add_family_btn">
                <i class="fa fa-plus-circle fa-lg"></i> <?= __('Add Family') ?>
              </button>
                  </div>
                </div>
              </div>
            <?php echo $this->Form->end(); ?>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 maxW600">
        <div class="table-responsive">
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th class="maxW120"><?= __('Name') ?><span></span></th>
                <th class="maxW100"><span><?= __('Relationship') ?></span></th>
                <th class="maxW100"><span><?= __('Birthday(Age)') ?></span></th>
                <th class="maxW100"><span><?= __('Job') ?></span></th>
                <th class="maxW100"><span><?= __('Phone') ?></span></th>
                <th class="maxW50"><span></span></th>
              </tr>
            </thead>
            <tbody class="family_table">
              <?php foreach ($trainee_families as $family) : ?>
                <tr data-family-id="<?php echo $family['TraineeFamily']['id']; ?>">
                  <td class="td_first_block">
                    <?php echo $family['TraineeFamily']['name'];?>
                  </td>
                  <td>
                    <?php echo $family['TraineeFamily']['relationship'];?>
                  </td>
                  <td>
                    <?php echo $family['TraineeFamily']['birthday']." (".$this->Btn->calcAge($family['TraineeFamily']['birthday']).")";?>
                  </td>
                  <td>
                    <?php echo $this->Btn->switchLang($lang, $family['Job']['job_jp'], $family['Job']['job_en']);?>
                  </td>
                  <td>
                    <?php echo $family['TraineeFamily']['phone'];?>
                  </td>
                  <td>
                    <div class="actions text-center">
                      <?php echo $this->Html->link(
                        '<i class="fa fa-pencil"></i>',
                        array('controller' => 'trainee_families', 'action' => 'edit',$family['TraineeFamily']['id']),
                        array('escape' => false, 'class' => 'table-link' )
                      );?>
                      <?php echo $this->Form->postlink(
                        '<i class="fa fa-trash-o"></i>',
                        array('controller' => 'trainee_families', 'action' => 'delete',$family['TraineeFamily']['id']),
                        array('confirm' => __('Are you sure you want to delete # %s?', $family['TraineeFamily']['id']),'escape' => false, 'class' => 'table-link red' )
                      );?>
                    </div>
                  </td>
                </tr>
              <?php endforeach; ?>
              <tr data-family-id="" class="hide tmp_family_add">
                <td class="name td_first_block">
                </td>
                <td class="relationship">
                </td>
                <td class="birthday">
                </td>
                <td class="job_id">
                </td>
                <td class="phone">
                </td>
                <td>
                  <div class="actions text-center">
                    <a href="" class="table-link edit"><i class="fa fa-pencil"></i></a>
                    <form action="" name="" id="" style="display:none;" method="post" class="delete"><input type="hidden" name="_method" value="POST"></form>
                    <a href="#" class="table-link red delete" onclick=""><i class="fa fa-trash-o"></i></a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="hide"><?php echo $this->Form->create('TraineeFamily', array(
        'action' => 'edit',
        'class' => 'hide family-edit-link'
      )) ?>
      <?php echo $this->Form->end(); ?>
      <?php echo $this->Form->create('TraineeFamily', array(
        'action' => 'delete',
        'class' => 'hide family-delete-link'
      )) ?>
      <?php echo $this->Form->end(); ?></div>
  </div>
  <div class="tab-pane fade" id="tab-profile-career">
    <div class="table-responsive maxW850">
      <?php echo $this->Form->create('Trainee', array(
        'action' => 'updateCareerAjax',
        'class' => 'form_trainee_edit form_career',
        'inputDefaults' => array(
          'div' => false,
          )
      )); ?>
      <?php echo $this->Form->hidden('id'); ?>
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th style="width:100px"><span></span></th>
              <th class="text-center" style="width:300px"><span>日本語</span></th>
              <th class="text-center" style="width:360px"><span>English</span></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td rowspan="4" class="td_first_block">
                <?= __('Academic History') ?>
              </td>
              <td class="td_first_block">
                <?php echo $this->Form->input('academic1_jp',array(
                  'label' => '学校名',
                  'class' => 'form-control maxW250 academic1_jp'
                )) ?>
              </td>
              <td>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <label>From</label>
                      <input type="month" name="data[Trainee][academic1_from]" value="<?php echo $this->request->data['Trainee']['academic1_from']; ?>" class="form-control maxW200 academic1_from" id="TraineeAcademic1FromMonth">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <label for="">To</label>
                      <input type="month" name="data[Trainee][academic1_to]" value="<?php echo $this->request->data['Trainee']['academic1_to']; ?>" class="form-control maxW200 academic1_to" id="TraineeAcademic1ToMonth">
                    </div>
                  </div>
                </div>
                <?php echo $this->Form->input('academic1_en',array(
                  'label' => 'Shool',
                  'class' => 'form-control academic1_en'
                )) ?>
              </td>
            </tr>
            <tr>
              <td class="td_first_block">
                <?php echo $this->Form->input('academic2_jp',array(
                  'label' => '学校名',
                  'class' => 'form-control academic2_jp'
                )) ?>
              </td>
              <td>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <label>From</label>
                      <input type="month" name="data[Trainee][academic2_from]" value="<?php echo $this->request->data['Trainee']['academic2_from']; ?>" class="form-control maxW200 academic2_from" id="TraineeAcademic2FromMonth">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <label for="">To</label>
                      <input type="month" name="data[Trainee][academic2_to]" value="<?php echo $this->request->data['Trainee']['academic2_to']; ?>" class="form-control maxW200 academic2_to" id="TraineeAcademic2ToMonth">
                    </div>
                  </div>
                </div>
                <?php echo $this->Form->input('academic2_en',array(
                  'label' => 'Shool',
                  'class' => 'form-control academic2_en'
                )) ?>
              </td>
            </tr>
            <tr>
              <td class="td_first_block">
                <?php echo $this->Form->input('academic3_jp',array(
                  'label' => '学校名',
                  'class' => 'form-control academic3_jp'
                )) ?>
              </td>
              <td>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <label>From</label>
                      <input type="month" name="data[Trainee][academic3_from]" value="<?php echo $this->request->data['Trainee']['academic3_from']; ?>" class="form-control maxW200 academic3_from" id="TraineeAcademic3FromMonth">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <label for="">To</label>
                      <input type="month" name="data[Trainee][academic3_to]" value="<?php echo $this->request->data['Trainee']['academic3_to']; ?>" class="form-control maxW200 academic3_to" id="TraineeAcademic3ToMonth">
                    </div>
                  </div>
                </div>
                <?php echo $this->Form->input('academic3_en',array(
                  'label' => 'Shool',
                  'class' => 'form-control academic3_en'
                )) ?>
              </td>
            </tr>
            <tr>
              <td class="td_first_block">
                <?php echo $this->Form->input('academic4_jp',array(
                  'label' => '学校名',
                  'class' => 'form-control academic4_jp'
                )) ?>
              </td>
              <td>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <label>From</label>
                      <input type="month" name="data[Trainee][academic4_from]" value="<?php echo $this->request->data['Trainee']['academic4_from']; ?>" class="form-control maxW200 academic4_from" id="TraineeAcademic4FromMonth">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <label for="">To</label>
                      <input type="month" name="data[Trainee][academic4_to]" value="<?php echo $this->request->data['Trainee']['academic4_to']; ?>" class="form-control maxW200 academic4_to" id="TraineeAcademic4ToMonth">
                    </div>
                  </div>
                </div>
                <?php echo $this->Form->input('academic4_en',array(
                  'label' => 'Shool',
                  'class' => 'form-control academic4_en'
                )) ?>
              </td>
            </tr>
            <tr>
              <td class="td_first_block">
                <?= __('Latest Academic History')  ?>
              </td>
              <td></td>
              <td>
                <?php echo $this->Form->input('latest_academic_history',array(
                        'label' => false,
                        'type' => 'select',
                        'options' => array(
                          '1' => __('Elementary School'),
                          '2'        =>  __('Secondary Shool'),
                          '3'        =>  __('High School'),
                          '4'         =>  __('University'),
                           ),
                        'class' => "form-control maxW160 latest_academic_history",
                        'empty' => true,
                      )); ?>
              </td>
            </tr>
            <tr>
              <td rowspan="5" class="td_first_block">
                <?= __('Employment History') ?>
              </td>
              <td class="td_first_block">
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <?php echo $this->Form->input('employ1_jp',array(
                        'label' => '会社名',
                        'class' => 'form-control maxW200 employ1_jp'
                      )) ?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <?php echo $this->Form->input('employ1_salary',array(
                        'label' => __('Basic Salary'),
                        'class' => 'form-control maxW100 employ1_salary'
                      )) ?>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <label><?= __('Job') ?></label>
                        <?php echo $this->Form->input('employ1_job',array(
                          'label' => false,
                          'div' => false,
                          'class' => 'form-control sel_job employ1_job',
                          'options' => $option_jobs,
                          'empty' => __('--Select Job--'),
                          'value' => $this->request->data['Trainee']['employ1_job'],
                          'style' => 'width:100%'
                        )) ?>
                    </div>

                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <label for="">From</label>
                      <input type="month" name="data[Trainee][employ1_from]" value="<?php echo $this->request->data['Trainee']['employ1_from']; ?>" class="form-control employ1_from" id="TraineeEmploy1FromMonth">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <label for="">To</label>
                      <input type="month" name="data[Trainee][employ1_to]" value="<?php echo $this->request->data['Trainee']['employ1_to']; ?>" class="form-control employ1_to" id="TraineeEmploy1ToMonth">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <?php echo $this->Form->input('employ1_en',array(
                        'label' => 'Company',
                        'class' => 'form-control employ1_en'
                      )) ?>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td class="td_first_block">
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <?php echo $this->Form->input('employ2_jp',array(
                        'label' => '会社名',
                        'class' => 'form-control maxW200 employ2_jp'
                      )) ?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <?php echo $this->Form->input('employ2_salary',array(
                        'label' => __('Basic Salary'),
                        'class' => 'form-control maxW100 maxW100 employ2_salary'
                      )) ?>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <label><?= __('Job') ?></label>
                        <?php echo $this->Form->input('employ2_job',array(
                          'label' => false,
                          'div' => false,
                          'class' => 'form-control sel_job employ2_job',
                          'options' => $option_jobs,
                          'empty' => __('--Select Job--'),
                          'value' => $this->request->data['Trainee']['employ2_job'],
                          'style' => 'width:100% employ2_job'
                        )) ?>
                    </div>

                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <label for="">From</label>
                      <input type="month" name="data[Trainee][employ2_from]" value="<?php echo $this->request->data['Trainee']['employ2_from']; ?>" class="form-control employ2_from" id="TraineeEmploy2FromMonth">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <label for="">To</label>
                      <input type="month" name="data[Trainee][employ2_to]" value="<?php echo $this->request->data['Trainee']['employ2_to']; ?>" class="form-control employ2_to" id="TraineeEmploy2ToMonth">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                <?php echo $this->Form->input('employ2_en',array(
                  'label' => 'Company',
                  'class' => 'form-control employ2_en'
                )) ?>
                </div>
                </div>
                </div>
              </td>
            </tr>
            <tr>
              <td class="td_first_block">
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <?php echo $this->Form->input('employ3_jp',array(
                        'label' => '会社名',
                        'class' => 'form-control maxW200 employ3_jp'
                      )) ?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <?php echo $this->Form->input('employ3_salary',array(
                        'label' => __('Basic Salary'),
                        'class' => 'form-control maxW100 employ3_salary'
                      )) ?>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <label><?= __('Job') ?></label>
                        <?php echo $this->Form->input('employ3_job',array(
                          'label' => false,
                          'div' => false,
                          'class' => 'form-control sel_job employ3_job',
                          'options' => $option_jobs,
                          'empty' => __('--Select Job--'),
                          'value' => $this->request->data['Trainee']['employ3_job'],
                          'style' => 'width:100%'
                        )) ?>
                    </div>

                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <label for="">From</label>
                      <input type="month" name="data[Trainee][employ3_from]" value="<?php echo $this->request->data['Trainee']['employ3_from']; ?>" class="form-control employ3_from" id="TraineeEmploy3FromMonth">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <label for="">To</label>
                      <input type="month" name="data[Trainee][employ3_to]" value="<?php echo $this->request->data['Trainee']['employ3_to']; ?>" class="form-control employ3_to" id="TraineeEmploy3ToMonth">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                <?php echo $this->Form->input('employ3_en',array(
                  'label' => 'Company',
                  'class' => 'form-control employ3_en'
                )) ?>
                </div>
                </div>
                </div>
              </td>
            </tr>
            <tr>
              <td class="td_first_block">
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <?php echo $this->Form->input('employ4_jp',array(
                        'label' => '会社名',
                        'class' => 'form-control maxW200 employ4_jp'
                      )) ?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <?php echo $this->Form->input('employ4_salary',array(
                        'label' => __('Basic Salary'),
                        'class' => 'form-control maxW100 employ4_salary'
                      )) ?>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <label><?= __('Job') ?></label>
                        <?php echo $this->Form->input('employ4_job',array(
                          'label' => false,
                          'div' => false,
                          'class' => 'form-control sel_job employ4_job',
                          'options' => $option_jobs,
                          'empty' => __('--Select Job--'),
                          'value' => $this->request->data['Trainee']['employ4_job'],
                          'style' => 'width:100%'
                        )) ?>
                    </div>

                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <label for="">From</label>
                      <input type="month" name="data[Trainee][employ4_from]" value="<?php echo $this->request->data['Trainee']['employ4_from']; ?>" class="form-control employ4_from"  id="TraineeEmploy4FromMonth">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <label for="">To</label>
                      <input type="month" name="data[Trainee][employ4_to]" value="<?php echo $this->request->data['Trainee']['employ4_to']; ?>" class="form-control employ4_to" id="TraineeEmploy4ToMonth">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                <?php echo $this->Form->input('employ4_en',array(
                  'label' => 'Company',
                  'class' => 'form-control employ4_en'
                )) ?>
                </div>
                </div>
                </div>
              </td>
            </tr>
            <tr>
              <td class="td_first_block">
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <?php echo $this->Form->input('employ5_jp',array(
                        'label' => '会社名',
                        'class' => 'form-control maxW200 employ5_jp'
                      )) ?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <?php echo $this->Form->input('employ5_salary',array(
                        'label' => __('Basic Salary'),
                        'class' => 'form-control maxW100 employ5_salary'
                      )) ?>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <label><?= __('Job') ?></label>
                        <?php echo $this->Form->input('employ5_job',array(
                          'label' => false,
                          'div' => false,
                          'class' => 'form-control sel_job employ5_job',
                          'options' => $option_jobs,
                          'empty' => __('--Select Job--'),
                          'value' => $this->request->data['Trainee']['employ5_job'],
                          'style' => 'width:100%'
                        )) ?>
                    </div>

                  </div>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <label for="">From</label>
                      <input type="month" name="data[Trainee][employ5_from]" value="<?php echo $this->request->data['Trainee']['employ5_from']; ?>" class="form-control employ5_from" id="TraineeEmploy5FromMonth">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <label for="">To</label>
                      <input type="month" name="data[Trainee][employ5_to]" value="<?php echo $this->request->data['Trainee']['employ5_to']; ?>" class="form-control employ5_to" id="TraineeEmploy5ToMonth">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                <?php echo $this->Form->input('employ5_en',array(
                  'label' => 'Company',
                  'class' => 'form-control employ5_en'
                )) ?>
                </div>
                </div>
                </div>
              </td>
            </tr>

            <!-- Job Expectation -->
            <tr>
              <td class="td_first_block">
                <?= __('Job Expectation') ?>
              </td>
              <td></td>
              <td>
                <?php echo $this->Form->input('job_expectation1',array(
                  'label' => false,
                  'options' => $option_jobs,
                  'class' => "form-control sel_job job_expectation1",
                  'selected' => $this->request->data['Trainee']['job_expectation1'],
                  'style' => array("width:100%"),
                  'div' => false,
                  'empty' => '--Select Job--'
                )); ?>
                <?php echo $this->Form->input('job_expectation2',array(
                  'label' => false,
                  'options' => $option_jobs,
                  'class' => "form-control sel_job job_expectation2",
                  'selected' => $this->request->data['Trainee']['job_expectation2'],
                  'style' => array("width:100%"),
                  'div' => false,
                  'empty' => '--Select Job--'
                )); ?>
                <?php echo $this->Form->input('job_expectation3',array(
                  'label' => false,
                  'options' => $option_jobs,
                  'class' => "form-control sel_job job_expectation3",
                  'selected' => $this->request->data['Trainee']['job_expectation3'],
                  'style' => array("width:100%"),
                  'div' => false,
                  'empty' => '--Select Job--'
                )); ?>
              </td>
            </tr>
            <!-- //Job Expectation -->
            <tr>
              <td rowspan="2" class="td_first_block">
                <?= __('Positions Held') ?>
              </td>
              <td>
                <?php echo $job1['Job1']['job_jp']; ?> 職 <?php echo $this->request->data['Trainee']['job1_term'] ?>年
              </td>
              <td>
                <div class="form-group">
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <label><?= __('Job') ?></label>
                      <?php echo $this->Form->input('job1_id',array(
                        'label' => false,
                        'div' => false,
                        'class' => 'form-control sel_job job1_id',
                        'options' => $option_jobs,
                        'empty' => __('--Select Job--'),
                        'value' => $this->request->data['Trainee']['job1_id'],
                        'style' => 'width:100%'
                      )) ?>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="">For</label>
                      <?php echo $this->Form->input('job1_term',array(
                        'label' => false,
                        'class' => 'form-control job1_term'
                      )) ?> Year(s)
                  </div>

                </div>
              </td>
            </tr>
            <tr>
              <td class="td_first_block">
                <?php echo $job2['Job2']['job_jp']; ?> 職 <?php echo $this->request->data['Trainee']['job2_term'] ?>年
              </td>
              <td>
                <div class="form-group">
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <label><?= __('Job') ?></label>
                      <?php echo $this->Form->input('job2_id',array(
                        'label' => false,
                        'div' => false,
                        'class' => 'form-control sel_job job2_id',
                        'options' => $option_jobs,
                        'empty' => __('--Select Job--'),
                        'value' => $this->request->data['Trainee']['job2_id'],
                        'style' => 'width:100%'
                      )) ?>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="">For</label>
                    <?php echo $this->Form->input('job2_term',array(
                        'label' => false,
                        'class' => 'form-control job2_term'
                      )) ?> Year(s)
                  </div>

                </div>
              </td>
            </tr>
            <tr>
              <td class="td_first_block">
                <?= __('Visit Japan') ?>
              </td>
              <td>
                <?php if($this->request->data['Trainee']['visit_jpn'] == 0) {echo '無';}else{echo '有';} ?>
                <?php
                  $from = $this->request->data['Trainee']['visit_jpn_from'];
                  $to = $this->request->data['Trainee']['visit_jpn_to'];
                  $term = array($from, $to);
                  if($from && $to){
                    for ($i=0; $i < 2; $i++) {
                      $term[$i] = date('Y-m-d', strtotime($term[$i]));
                      list($y[$i], $m[$i]) = explode('-', $term[$i]);
                    }
                    echo $y[0]."年".$m[0]."月 ～ ".$y[1]."年".$m[1]."月";
                  }
                ?>
              </td>
              <td>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                      <?php echo $this->Form->input('visit_jpn',array(
                        'label' => __('Have you been to Japan?'),
                        'type' => 'select',
                        'options' => array('0'=> __('No'),'1'=> __('I have')),
                        'class' => "form-control maxW100 visit_jpn",
                        'div' => false
                      )); ?>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <label for="">From</label>
                    <input type="month" name="data[Trainee][visit_jpn_from]" value="<?php echo $this->request->data['Trainee']['visit_jpn_from']; ?>" class="form-control visit_jpn_from" id="TraineeVisitJpnFromMonth">
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <label for="">To</label>
                    <input type="month" name="data[Trainee][visit_jpn_to]" value="<?php echo $this->request->data['Trainee']['visit_jpn_to']; ?>" class="form-control visit_jpn_to" id="TraineeVisitJpnToMonth">
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="profile-message-btn center-block text-right">
          <button type="button" class="btn btn-default update_career_btn">
            <i class="fa fa-pencil"></i>
            <?= __('Save') ?>
          </button>
        </div>
      <?php echo $this->Form->end(); ?>
    </div>
  </div>
  <div class="tab-pane fade" id="tab-profile-others">
    <div class="table-responsive maxW900">
      <?php echo $this->Form->create('Trainee', array(
        'action' => 'updateOthersAjax',
        'class' => 'form_trainee_edit form_others',
        'inputDefaults' => array(
          'div' => false,
          )
      )); ?>
      <?php echo $this->Form->hidden('id'); ?>
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th ><span></span></th>
              <th class="text-center"><span>日本語</span></th>
              <th class="text-center"><span>English</span></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="td_first_block">
                <?= __('Purpose to visit Japan') ?>
              </td>
              <td>
                <?php echo $this->Form->textarea('purpose_jp',array(
                  'rows' => '3',
                  'class' => 'form-control purpose_jp' ,
                  'label' => false
                )) ?>
              </td>
              <td>
                <?php echo $this->Form->textarea('purpose_en',array(
                  'rows' => '3',
                  'class' => 'form-control purpose_en',
                  'label' => false
                )) ?>
              </td>
            </tr>
            <tr>
              <td class="td_first_block">
                <?= __('Family, Brother or Friend in Japan') ?>
              </td>
              <td>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <?php if($this->request->data['Trainee']['family_in_jpn'] == 0) {echo '無';}else{echo '有';} ?>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <?php echo sprintf(__('%s'),$this->request->data['Trainee']['family_in_jpn_relationship_en']); ?>
                </div>
              </td>
              <td>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <?php echo $this->Form->input('family_in_jpn',array(
                      'label' => __("Any acquaintances?"),
                      'type' => 'select',
                      'options' => array('0'=> __('Nothing'),'1'=> __('Have')),
                      'class' => "form-control maxW100 family_in_jpn",
                      'div' => false
                    )); ?>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <label for="" class=""><?= __('Relationship') ?></label>
                      <?php echo $this->Form->input('family_in_jpn_relationship_en',array(
                        'label' => false,
                        'type' => 'select',
                        'options' => array(
                          'partner' => __('Partner'),
                          'father'        =>  __('Father'),
                          'mother'        =>  __('Mother'),
                          'child'         =>  __('Child'),
                          'brother'       =>  __('Brother'),
                          'sister'        =>  __('Sister'),
                          'young brother' =>  __('Young Brother'),
                          'young sister'  =>  __('Young Sister'),
                          'grandfather'   =>  __('Grandfather'),
                          'grandmather'   =>  __('Grandmather'),
                          'grandchild'    =>  __('Grandchild'),
                          'father in law' =>  __('Father in law'),
                          'mother in law' =>  __('Mother in law'),
                          'uncle'         =>  __('Uncle'),
                          'aunt'          =>  __('Aunt'),
                          'nephew'        =>  __('Nephew'),
                          'niece'         =>  __('Niece'),
                          'friend'        => __('Friend')
                           ),
                        'class' => "form-control maxW160 family_in_jpn_relationship_en",
                        'empty' => true,
                        'required' =>true
                      )); ?>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td  class="td_first_block"><?= __('Plan after return') ?></td>
              <td>
                <?php echo $this->Form->textarea('plan_after_return_jp',array(
                  'rows' => '2',
                  'class' => 'form-control plan_after_return_jp',
                  'label' => false
                )) ?>
              </td>
              <td>
                <?php echo $this->Form->textarea('plan_after_return_en',array(
                  'rows' => '2',
                  'class' => 'form-control plan_after_return_en',
                  'label' => false
                )) ?>
              </td>
            </tr>
            <tr>
              <td  class="td_first_block"><?= __('Save money in 3 years') ?></td>
              <td>
                <?php echo $this->Form->input('saving_money',array(
                  'class' => 'form-control saving_money',
                  'label' => false,
                  'style' => 'width:100px;display:inline'
                )) ?> 万円
              </td>
              <td></td>
            </tr>
            <tr>
              <td  class="td_first_block"><?= __('Current Status after return') ?></td>
              <td>
                <?php echo $this->Form->textarea('status_after_return_jp',array(
                  'rows' => '3',
                  'class' => 'form-control status_after_return_jp',
                  'label' => false
                )) ?>
              </td>
              <td>
                <?php echo $this->Form->textarea('status_after_return_en',array(
                  'rows' => '3',
                  'class' => 'form-control status_after_return_en',
                  'label' => false
                )) ?>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="profile-message-btn center-block text-right">
          <button type="button" class="btn btn-default update_others_btn">
            <i class="fa fa-pencil"></i>
            <?= __('Save') ?>
          </button>
        </div>

      <?php echo $this->Form->end(); ?>
    </div>
  </div>
</div>