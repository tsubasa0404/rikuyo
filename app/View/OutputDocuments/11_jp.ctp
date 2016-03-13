<?php $this->set('title_for_layout', 'Documents List'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/rikuyo_css/print', array('inline'=>false, 'block'=>'page-css',array('media' => 'print')));?>
<?php $this->Html->css('libs/rikuyo_css/1_en', array('inline'=>false, 'block'=>'page-css'),array('media' => 'print'));?>
<?php $this->Html->css('libs/rikuyo_css/11_jp', array('inline'=>false, 'block'=>'page-css'),array('media' => 'print'));?>
<?php $this->Html->addCrumb(__('Interviews'), '/interviews'); ?>
<?php $this->Html->addCrumb(__('Interview Profile'), '/interviews/profile/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Documents List'), '/output_documents/doc_list/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Advance Lecture Sheet ( Tentative )')); ?>
					<h1><?= __('Advance Lecture Sheet ( Tentative )') ?></h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 maxW800">
					<div class="main-box clearfix">


						<div class="main-box-body clearfix">
							<div class="print-area" style="width: 750px;">


								<p align="right" >
								    <span class="jitcoBox">JITCO書式10-10</span>
								</p>
								<p align="center" style="margin-top: 50px;font-size: 22px;">
								    <strong>本邦外における講習・外部講習実施（予定）表</strong>
								</p>
								<div style="margin-left: 20px;">
									<p>
									    ○講習実施機関名（所在地及び機関名）　 　○講習等実施施設名（所在地及び連絡先）
									</p>
									<p style="margin-top: 0px;margin-bottom: 0px">
									    <strong><input type="text" value="<?php echo $interview_prof[0]['Association']['association_jp'] ?>" style="width: 200px;" ></strong>
									</p>
									<p style="margin-top: 0px;margin-bottom: 0px">
									    所在地：<input type="text" value="<?php echo $interview_prof[0]['Association']['province']." ".$interview_prof[0]['Association']['address_jp'] ?>" style="width: 300px;" >
									</p>
									<p style="margin-top: 0px;margin-bottom: 0px">
									    TEL : <input type="text" value="<?php echo $interview_prof[0]['Association']['phone1'] ?>" style="width: 200px;" >
									</p>
									<p>
									    （上記機関が本邦外での講習等を他の機関に委託した場合に記入）
									</p>
									<p>
									    ●講習等実施施設名（所在地及び連絡先）　 ●委託契約の詳細
									</p>
									<p  style="margin-top: 0px;margin-bottom: 0px">
									    <strong><input type="text" value="HUMAN POWER JAPANESE TRAINING CENTER" style="width: 400px;" > </strong> 委託費：<input type="text" value="39" style="width: 40px;text-align: center" > USD (<input type="text" value="3900" style="width: 75px;text-align: center" > 円) / 1名
									</p>
									<p style="margin-top: 0;margin-bottom: 0">
									    <textarea style="width: 300px;vertical-align: top;" rows="2">Nº.115D, Street 18 , Tuol Sangke Commune, Russey Keo Distrct, Phnom Penh</textarea>　　（合計/一人当たり）  講習期間：約１ヶ月
									</p>
									<p style="margin-top: 0">
									    TEL: <input type="text" value="+855-15-545-764" style="width: 200px;" >
									</p>
									<p align="center" style="margin-top: 20px;margin-left: 20px; border-bottom: 1px solid #333;width: 600px">
									    　講習等実施施設の責任者　　役職・氏名
									    　　
									    President
									    <input type="text" name="" value="SOK SOPHEAK" style="width: 200px;text-align: center;">㊞
									</p>
									<p>
									    ○講習等実施期間　 <input type="text" name="" value="" style="width: 50px;text-align: center;">年<input type="text" name="" value="" style="width: 30px;text-align: center;">月<input type="text" name="" value="" style="width: 30px;text-align: center;">日 ～ <input type="text" name="" value="" style="width: 50px;text-align: center;">年<input type="text" name="" value="" style="width: 30px;text-align: center;">月<input type="text" name="" value="" style="width: 30px;text-align: center;">日
									</p>
									<table border="1" cellspacing="0" cellpadding="0">
									    <tbody class="table-11">
									        <tr>
									            <td width="595" colspan="2">
									                <p align="center">
									                    <strong>講習科目（講習内容）</strong>

									                </p>
									                <p align="center">
									                    <strong>講師の氏名（役職・経験年数）</strong>

									                </p>
									            </td>
									            <td width="95">
									                <p align="center">
									                    <strong>実施時間数</strong>

									                </p>
									            </td>
									        </tr>
									        <tr>
									            <td width="29" rowspan="4">
									                <p align="center">
									                    １
									                </p>
									            </td>
									            <td width="566">
									                <p>
									                    日本語（日本語能力検定試験４級）レベル （日本語教師 <input type="text" name="" value="Khun Makara" style="width: 125px;text-align: center;"> <input type="text" name="" value="6" style="width: 20px;text-align: center;">年）
									                </p>
									            </td>
									            <td width="95">
									                <p align="center">
									                    123時間
									                </p>
									            </td>
									        </tr>
									        <tr>
									            <td width="566">
									                <p>
									                    ① 文字、語彙、読解、文法、聴解
									                </p>
									            </td>
									            <td width="95">
									            </td>
									        </tr>
									        <tr>
									            <td width="566">
									                <p>
									                    ② 健康管理や危険回避の言葉
									                </p>
									            </td>
									            <td width="95">
									            </td>
									        </tr>
									        <tr>
									            <td width="566" style="height: 19px">
									            </td>
									            <td width="95">
									            </td>
									        </tr>
									        <tr>
									            <td width="29" rowspan="4">
									                <p align="center">
									                    ２
									                </p>
									            </td>
									            <td width="566">
									                <p>
									                    日本での生活一般に関する知識　　　（日本語教師 <input type="text" name="" value="Iijima Kanako" style="width: 125px;text-align: center;"> <input type="text" name="" value="5" style="width: 20px;text-align: center;">年）
									                </p>
									            </td>
									            <td width="95">
									                <p align="center">
									                    28時間
									                </p>
									            </td>
									        </tr>
									        <tr>
									            <td width="566">
									                <p>
									                    日本の歴史、文化
									                </p>
									            </td>
									            <td width="95">
									            </td>
									        </tr>
									        <tr>
									            <td width="566">
									                <p>
									                    生活様式、職場でのルール
									                </p>
									            </td>
									            <td width="95">
									            </td>
									        </tr>
									        <tr>
									            <td width="566">
									                <p>
									                    来日～帰国までの流れ、手続き
									                </p>
									            </td>
									            <td width="95">
									            </td>
									        </tr>
									        <tr>
									            <td width="29" rowspan="4">
									                <p align="center">
									                    ３
									                </p>
									            </td>
									            <td width="566">
									                <p>
									                    その他、日本での円滑な技術等を習得する知識（日本語教師 <input type="text" name="" value="Moeung Jeudy" style="width: 120px;text-align: center;"><input type="text" name="" value="5" style="width: 20px;text-align: center;">年）
									                </p>
									            </td>
									            <td width="95">
									                <p align="center">
									                    25時間
									                </p>
									            </td>
									        </tr>
									        <tr>
									            <td width="566">
									                <p>
									                    習得技術の目標内容
									                </p>
									            </td>
									            <td width="95">
									            </td>
									        </tr>
									        <tr>
									            <td width="566">
									                <p>
									                    職場規律、心構え
									                </p>
									            </td>
									            <td width="95">
									            </td>
									        </tr>
									        <tr>
									            <td width="566">
									                <p>
									                    健康や安全に対する自覚
									                </p>
									            </td>
									            <td width="95">
									            </td>
									        </tr>
									        <tr>
									            <td width="29" rowspan="3">
									                <p align="center">
									                    ４
									                </p>
									            </td>
									            <td width="566"  style="height: 19px">
									            </td>
									            <td width="95">
									            </td>
									        </tr>
									        <tr>
									            <td width="566"  style="height: 19px">
									            </td>
									            <td width="95">
									            </td>
									        </tr>
									        <tr>
									            <td width="566"  style="height: 19px">
									            </td>
									            <td width="95">
									            </td>
									        </tr>
									        <tr>
									            <td width="29" rowspan="3">
									                <p align="center">
									                    ５
									                </p>
									            </td>
									            <td width="566"  style="height: 19px">
									            </td>
									            <td width="95">
									            </td>
									        </tr>
									        <tr>
									            <td width="566"  style="height: 19px">
									            </td>
									            <td width="95">
									            </td>
									        </tr>
									        <tr>
									            <td width="566"  style="height: 19px">
									            </td>
									            <td width="95">
									            </td>
									        </tr>
									        <tr style="border-bottom: 1px solid #333;">
									            <td width="595" colspan="2" style="height: 30px;">
									                <p align="center">
									                    <strong>合　計　時　間</strong>
									                    <strong></strong>
									                </p>
									            </td>
									            <td width="95">
									                <p align="center">
									                    <strong>176</strong>
									                    <strong>時間</strong>
									                    <strong></strong>
									                </p>
									            </td>
									        </tr>
									    </tbody>
									</table>
								</div>
								<p>
								    　　　　　　　　　　　 <input type="text" name="" value="" style="width:50px;text-align: center">
									    年<input type="text" name="" value="" style="width:30px;text-align: center">月<input type="text" name="" value="" style="width:30px;text-align: center">日　　作成
								</p>
								<p>
								    　　　　　　　　　　 　講習等実施機関名　<input type="text" name="" value="" style="width:300px;">
								</p>
								<p align="center" style="margin-top: 20px;margin-left: 20px; border-bottom: 1px solid #333;width: 600px">
								    　　　　　責任者　　役職・氏名
								    <input type="text" name="" value="" style="width: 150px;text-align: center;">
								    <input type="text" name="" value="" style="width: 200px;text-align: center;">㊞
								</p>



								</div>
							</div>

							</div>
						</div>

	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
		$(function(){
			$('.md-modal').remove();
		});
	<?php $this->Html->scriptEnd(); ?>