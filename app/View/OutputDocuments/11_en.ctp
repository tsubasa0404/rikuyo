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
								    <span class="jitcoBox">JITCO書式10-10-3</span>
								</p>
								<p align="center" style="margin-top: 50px;font-size: 22px;">
								    <strong>Advance Lecture Sheet ( Tentative )</strong>
								</p>
								<div style="margin-left: 20px;">
									<div style="width: 320px;display: inline-block;">
										<p>
										    ○Name of organization implementing the advance<br>lectures etc. ( address and contact information )
										</p>
									</div>
									<div style="width: 320px;display: inline-block;">
										<p>
											○Name of facilities for the advance lectures, etc.<br>( address and contact information )
										</p>
									</div>
									<p style="margin-top: 0px;margin-bottom: 0px">
									    <strong><input type="text" value="<?php echo $interview_prof[0]['Association']['association_en']; ?>" style="width: 200px;" ></strong>
									</p>
									<p style="margin-top: 0px;margin-bottom: 0px">
									    <input type="text" value="<?php echo $interview_prof[0]['Association']['address_en'] ?>" style="width: 400px;" >
									</p>
									<p style="margin-top: 0px;margin-bottom: 10px">
									    TEL : <input type="text" value="<?php echo $interview_prof[0]['Association']['phone1'] ?>" style="width: 200px;" >
									</p>
									<p style="margin-bottom: 0">
									    ( Fill out when the above organization contracts another organization to conduct the advance lectures, etc )
									</p>
									<div  style="width: 420px;display: inline-block;">
										<p style="margin-top: 0px;margin-bottom: 0px">
										    ●Name of facilities for the advance lectures , etc.<br>(address and contact information )
										</p>
										<p  style="margin-top: 0px;margin-bottom: 0px">
										    <strong><input type="text" value="HUMAN POWER JAPANESE TRAINING CENTER" style="width: 400px;" > </strong>
										</p>
										<p style="margin-top: 0;margin-bottom: 0">
										    <textarea style="width: 300px;vertical-align: top;" rows="2">Nº.115D, Street 18 , Tuol Sangke Commune, Russey Keo Distrct, Phnom Penh Cambodia</textarea>
										</p>
										<p style="margin-top: 0">
										    TEL: <input type="text" value="+855-15-545-764" style="width: 200px;" >
										</p>
									</div>
									<div  style="width: 250px;display: inline-block;vertical-align: top">
										<p style="margin-top: 0px;margin-bottom: 0px">
										    ●Details of contract
										</p>
										<p  style="margin-top: 0px;margin-bottom: 0px">
										     Contracting costs: <input type="text" value="39" style="width: 40px;text-align: center" > USD / person
										</p>
										<p style="margin-top: 0;margin-bottom: 0">
										    ( Total/per person )
										</p>

									</div>
									<p align="left" style="margin-top: 20px;margin-left: 20px; border-bottom: 1px solid #333;width: 600px">
									    Position and name of the person responsible<br> At facilities for the advance lectures, etc.　　　　President
									    <input type="text" name="" value="SOK SOPHEAK" style="width: 200px;text-align: center;">(seal)
									</p>
									<p>
									    ○Period of training etc. ( Y/M/D-Y/M/D): 　 <input type="text" name="" value="" style="width: 100px;text-align: center"> - <input type="text" name="" value="" style="width: 100px;text-align: center">
									</p>
									<table border="1" cellspacing="0" cellpadding="0">
									    <tbody class="table-11">
									        <tr>
									            <td width="595" colspan="2">
									                <p align="center">
																		Subject of the advance lectures <br>(Content of advance lecture)<br>Name (position, years experience) of lecturer
									                </p>
									            </td>
									            <td width="95">
									                <p align="center">
									                    Lecture hours
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
									                    Japanese ( Japanese proficiency test level 4 ) (Japanese teacher<input type="text" name="" value="Khun Makara" style="width: 125px;text-align: center;"> <input type="text" name="" value="6" style="width: 20px;text-align: center;">years）
									                </p>
									            </td>
									            <td width="95">
									                <p align="center">
									                    123hour
									                </p>
									            </td>
									        </tr>
									        <tr>
									            <td width="566">
									                <p>
									                    1 Writing, Vocabulary, Reading, Grammar, Listening
									                </p>
									            </td>
									            <td width="95">
									            </td>
									        </tr>
									        <tr>
									            <td width="566">
									                <p>
									                    2 Health management and Avoidance’s Vocabulary
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
									                    General knowledge of life in Japan ( Japanese teacher <input type="text" name="" value="Iijima Kanako" style="width: 125px;text-align: center;"> <input type="text" name="" value="5" style="width: 20px;text-align: center;">year）
									                </p>
									            </td>
									            <td width="95">
									                <p align="center">
									                    28hour
									                </p>
									            </td>
									        </tr>
									        <tr>
									            <td width="566">
									                <p>
									                    Japan’s history , culture
									                </p>
									            </td>
									            <td width="95">
									            </td>
									        </tr>
									        <tr>
									            <td width="566">
									                <p>
									                    Lifestyle, Factory rule
									                </p>
									            </td>
									            <td width="95">
									            </td>
									        </tr>
									        <tr>
									            <td width="566">
									                <p>
									                    Departure to Japan - Until the return flow, Procedure
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
									                    Other, The Knowledge that is how to learn the skills smoothly  in Japan<br>　　　　　　　　　　　　　　　　(Japanese teacher <input type="text" name="" value="Moeung Jeudy" style="width: 120px;text-align: center;"><input type="text" name="" value="5" style="width: 20px;text-align: center;">year）
									                </p>
									            </td>
									            <td width="95">
									                <p align="center">
									                    25hour
									                </p>
									            </td>
									        </tr>
									        <tr>
									            <td width="566">
									                <p>
									                    The goal of learning technology
									                </p>
									            </td>
									            <td width="95">
									            </td>
									        </tr>
									        <tr>
									            <td width="566">
									                <p>
									                    Working rule, Prepare
									                </p>
									            </td>
									            <td width="95">
									            </td>
									        </tr>
									        <tr>
									            <td width="566">
									                <p>
									                    For health and safety awareness
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

									        <tr style="border-bottom: 1px solid #333;">
									            <td width="595" colspan="2" style="height: 30px;">
									                <p align="center">
									                    <strong>Total hours</strong>
									                </p>
									            </td>
									            <td width="95">
									                <p align="center">
									                    <strong>176</strong>
									                    <strong>hours</strong>
									                </p>
									            </td>
									        </tr>
									    </tbody>
									</table>
								</div>
								<p>
								    　　　Date prepared (Y/M/D):<input type="text" name="" value="" style="width:200px;text-align: center">
								</p>
								<p>
								    　　　Name of organization implementing the advance lectures, etc.: <input type="text" name="" value="" style="width:300px;">
								</p>
								<p  style="margin-top: 20px;margin-left: 40px; border-bottom: 1px solid #333;width: 650px;padding-bottom: 2px;">
								    Position and name of person responsible
								    <input type="text" name="" value="" style="width: 150px;text-align: center;">
								    <input type="text" name="" value="" style="width: 200px;text-align: center;">(seal)
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