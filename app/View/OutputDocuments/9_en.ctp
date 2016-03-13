<?php $this->set('title_for_layout', 'Documents List'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/rikuyo_css/print', array('inline'=>false, 'block'=>'page-css',array('media' => 'print')));?>
<?php $this->Html->css('libs/rikuyo_css/1_en', array('inline'=>false, 'block'=>'page-css'),array('media' => 'print'));?>
<?php $this->Html->css('libs/rikuyo_css/9_jp', array('inline'=>false, 'block'=>'page-css'),array('media' => 'print'));?>
<?php $this->Html->css('libs/rikuyo_css/9_en', array('inline'=>false, 'block'=>'page-css'),array('media' => 'print'));?>
<?php $this->Html->addCrumb(__('Interviews'), '/interviews'); ?>
<?php $this->Html->addCrumb(__('Interview Profile'), '/interviews/profile/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Documents List'), '/output_documents/doc_list/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Agreement Concerning Technical Intern Training Program')); ?>
					<h1><?= __('Agreement Concerning Technical Intern Training Program') ?></h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 maxW750">
					<div class="main-box clearfix">


						<div class="main-box-body clearfix">
							<div class="print-area" style="font-size: 15px;">


								<p align="center" style="font-size: 24px;margin-top: 400px">
								    Agreement Concerning Technical Intern Training Program
								</p>
								<p align="center" style="font-size: 20px">
								    外国人技能実習事業に関する協定書
								</p>


								<div class="att">

								<div class="page-1" style="padding-left:20px;padding-right: 20px">
										<p align="center" class="new-page" style="padding-top: 50px;margin-bottom: 30px;">
									    <strong>Agreement concerning Technical Intern Training Program</strong>
									</p>
									<p style="padding-left: 0">
									    　<input type="text" value="<?php echo $agent[0]['Agent']['agent_en'] ?>" style="width: 200px;text-align: center" > in Kingdom of Cambodia (hereinafter referred to as the “Sending Organization”) and <input type="text" value="<?php echo $interview_prof[0]['Association']['association_jp'] ?>" style="width: 200px;text-align: center" > in Japan
									    (hereinafter referred to as the “Supervising Organization”) hereby conclude an agreement (hereinafter referred to as the “Agreement”) on the Technical
									    Intern Training Program (hereinafter referred to as the “TITP”) to be implemented by the Supervising Organization and organization implementing technical
									    intern training (hereinafter referred to as “implementing organization”) for technical intern trainees to be sent by the Sending Organization pursuant to
									    the provisions of laws and regulations in both countries under the following terms and conditions.
									</p>
									    <h3>Chapter 1 General Provisions</h3>
									    <h4>Article 1 (Objective)</h4>
									<p class="no-att">
									    The TITP aims to transfer skill, technology or knowledge that the Japanese industries possess (hereinafter referred to as the “Skills.”) to Kingdom of
									    Cambodia according to the laws and regulations in Japan, through having technical intern trainees acquire the Skills, and to contribute to development of
									    human resources of those who assume certain role for development of the industries in Kingdom of Cambodia and, promoting of mutual understanding and
									    friendship between the countries.
									</p>

									    <h3>Chapter 2 Basic Framework of TITP</h3>
									    <h4>Article 2 (Period of Stay in Japan)</h4>
									<p class="mB10">
									    1. The period of stay in Japan shall be set separately according to the period of the status of residence “Technical Intern Training (i)(b)” and the status
									    of residence “Technical Intern Training (ii)(b)” which the Immigration Control and Refugee Recognition Act (hereinafter referred to as the “Act”)
									    stipulates.
									</p>
									<p class="mB10">
									    2. The period of stay concerning “Technical Intern Training (i)(b)” shall be not exceed one year.
									</p>
									<p class="mB10">
									    3. The total period of stay concerning “Technical Intern Training (i)(b) and “Technical Intern Training (ii)(b)” can be within three years, provided that
									    the change of status residence from “Technical Intern Training (i)(b)” to “Technical Intern Training (ii)(b)” and thereafter extension of the period of
									    stay concerning “Technical Intern Training (ii)(b) is permitted by the Regional Immigration Bureau. For this purpose, it is necessary for technical intern
									    trainees, with the consent of the sending companies, the Sending Organization, the Supervising Organization and the Implementing Organization, to apply for
									    the change of residence status and extension of the period of stay.
									</p>
									<p>
									    <strong>Article 3 (Lectures in Japan and Advance Lectures or External Lectures before Entry into Japan)</strong>
									</p>
								</div>
								<div class="page-2" style="padding-left:20px;padding-right: 20px">
									<p class="new-page mB10" style="padding-top: 50px">
									    1. The lectures which technical intern trainees receive just after entering Japan pursuant to the provisions of the Act shall be implemented by the
									    Supervising Organization properly according to the related rules and regulations.
									</p>
									<p class="mB10">
									    2. The number of hours of lectures shall be at least 1/6 (one sixth) of the period of stay as to “Technical Intern Training (i)(b).” It can be, however, at
									    least 1/12 (one twelfth) of the period of stay when the advance lectures to be implemented by the Supervising Organization in Kingdom of Cambodia or
									    external lectures to be implemented by a public organization or an educational organization in Kingdom of Cambodia was organized for at least one month and
									    for at least 160 hours within six months before technical intern trainees entering Japan under the content of lectures satisfying the conditions stipulated
									    in the following paragraph.
									</p>
									<p class="mB10">
									    3. Advance lectures in Kingdom of Cambodia or external lectures shall be organized in a form of classroom lecture (including site visit) in Kingdom of
									    Cambodia as regards Japanese language, knowledge concerning general life in Japan, and knowledge useful for smooth acquisition of the Skills.
									</p>
									    <h4>Article 4 (Technical Intern Training)</h4>

									<p class="mB10">
									    1. Technical intern training under “Technical Intern Training (i)(b)” shall be given properly after the completion of lectures under an employment contract
									    between a technical intern trainee and the Implementing Organization according to the technical intern training plan made by the Supervising Organization.
									</p>
									<p class="mB10">
									    2. Technical intern training under “Technical Intern Training (ii)(b)” shall be given properly on the same Skills and at the same implementing organization
									    as those of “Technical Intern Training (i)(b)” under an employment contract between the technical intern trainee and the implementing organization
									    according to the technical intern training plan made by the Supervising Organization or the Implementing Organization.
									</p>
									<p class="mB10">
									    3. Technical intern training shall be given under the supervision and the responsibility of the Supervising Organization by clarifying the roles of the
									    Supervising Organization and the Implementing Organization.
									</p>

									    <h4>Article 5 (Technical Intern Training Coordinator and Adviser Assisting Technical Intern Trainees)</h4>

									<p class="mB10">
									    1. In connection with the Skills which technical intern trainees intend to acquire, the Implementing Organization shall place Technical Intern Training
									    Coordinator (hereinafter referred to as the “Coordinator”) as full-time staff members who have work experience of at least five years and, also Advisers
									    Assisting Technical Intern Trainees (hereinafter referred to as the “Adviser”) who follow the life of technical intern trainees and engage in consultation
									    and guidance to them.
									</p>
									<p class="mB10">
									    2. The Supervising Organization shall make effort to brush up Coordinators and Advisers of the Implementing Organization so that they may give their proper
									    guidance respectively.
									</p>
								</div>
								<div class="page-3" style="padding-left:20px;padding-right: 20px">
										<p class="new-page" style="padding-top: 50px;">
									    <h4>Article 6 (Requirements of Technical Interns Trainees)</h4>
									</p>

									<p>
									    Those who intend to be technical intern trainees shall meet all of the following requirements.
									</p>
									<p>
									    　(1) In Kingdom of Cambodia, they are now engaged in the work concerning the Skills which they are going to acquire in Japan or have experience of having
									    been engaged in it.
									</p>
									<p>
									    　(2) After they complete technical intern training in Japan and return home, they are scheduled to engage in the work requiring the Skills which they
									    acquired in Japan.
									</p>
									<p>
									    　(3) In connection with acquisition of the Skills in Japan, they are recommended by an organization of the government or local authority of Kingdom of
									    Cambodia or an organization similar to such organization.
									</p>
									<p>
									    　(4) They understand TITP and have high motivation to acquire the Skills.
									</p>
									<p>
									    　(5) They are 18 years old or older.
									</p>
									<p>
									    　(6) In principle, they have no experience of training or technical intern training in Japan in the past.
									</p>
									<p>
									    　(7) They have basic education to learn Japanese language required for technical intern training.
									</p>

									    <h3>Chapter 3 Employment Placement-related Operation</h3>

									    <h4>Article 7 (Employment Placement by Business Tie-up of Sending Organization and Supervising Organization)</h4>

									<p class="no-att">
									    In order to carry out the TITP smoothly, the Sending Organization and the Supervising Organization shall tie-up pursuant to the provisions of the laws and
									    regulations in both countries, carry out operation of employment placement in line with their roles and duties properly and cooperate with each other in
									    the program starting from recruitment of the persons who wish to be technical intern trainees (hereinafter referred to as the “Technical Intern Trainee
									    Candidates”), selection of the Technical Intern Trainee Candidates (Job seekers), maintenance of the Implementing Organizations which wish to accept
									    technical intern trainees (Person seekers), response to and provision of information for consultation from the Technical Intern Trainee Candidates and the
									    Implementing Organizations and matching of the Technical Intern Trainee Candidates and the Implementing Organizations, etc. to conclusion of employment
									    contracts according to the provisions specified in the next Article to the Article 12.
									</p>
									    <h4>Article 8 (Roles and Duties of Sending Organization and Supervising Organization in Employment Placement)</h4>
									<p>
									    1. The Sending Organization shall assume the following roles and duties.
									</p>
									<p>
									    　(1) To recruit the Technical Intern Trainee Candidates and to receive their application.
									</p>
									<p>
									    　(2) To select the Technical Intern Trainee Candidates who fulfill the requirements specified in the Article 6, and to make a job seeker list of selected
									    Technical Intern Trainee Candidates, and keep it in faith.
									</p>
									<p>
									    　(3) To send the job seeker list specified in the preceding sub-paragraph (2) to the Supervising Organization and provide the Supervising Organization with
									    other related information.
									</p>
								</div>
								<div class="page-4" style="padding-left:20px;padding-right: 20px">
										<p class="new-page" style="padding-top: 50px;">
									    　(4) To explain the details of the TITP based on this Agreement to the Technical Intern Trainee Candidates and to respond to their consultation.
									</p>
									<p>
									    　(5) To indicate information concerning Implementing Organizations and recruitment conditions including working conditions submitted by Implementing
									    Organizations, explain it to Technical Intern Trainee Candidates so that they may fully understand such conditions and to manage information on these
									    recruitments.
									</p>
									<p>
									    　(6) To take proper measures to match Technical Intern Trainee Candidates and Implementing Organizations by the method agreed after negotiation and
									    consultation with the Supervising Organization.
									</p>
									<p>
									    　(7) To know the results of matching of Technical Intern Trainee Candidates.
									</p>
									<p>
									    2. The Supervising Organization shall assume the following roles and duties.
									</p>
									<p>
									    　(1) To invite recruitment of Implementing Organizations and to accept employment offers.
									</p>
									<p>
									    　(2) To confirm and maintain Implementing Organizations, to make a person seeker list, and to keep it in faith.
									</p>
									<p>
									    　(3) To send the person seeker list specified in the preceding sub-paragraph (2) to the Sending Organization and to provide the Sending Organization with
									    other related information.
									</p>
									<p>
									    　(4) To explain the details of the TITP based on this Agreement to Implementing Organizations and to respond to their inquiry.
									</p>
									<p>
									    　(5) To provide Implementing Organizations with the job seeker list, and to keep it in faith.
									</p>
									<p>
									    　(6) To take proper measures to match Technical Intern Trainee Candidates and Implementing Organizations by the method agreed after negotiation and
									    consultation with the Sending Organization.
									</p>
									<p>
									    　(7) To know the results of employment by Implementing Organizations.
									</p>

									    <h4>Article 9 (Support of Sending Organization and Supervising Organization)</h4>
									<p class="no-att">
									    The Sending Organization and the Supervising Organization shall take proper measures subject to the negotiation and consultation about necessary supports
									    so that smooth agreement may be reached toward conclusion of employment contracts between Implementing Organizations and Technical Intern Trainee
									    Candidates.
									</p>
									    <h4>Article 10 (Agreement of Job Seekers and Person Seekers)</h4>
									<p class="no-att">
									    The Sending Organization and the Supervising Organization shall obtain agreement of the targeted Technical Intern Trainee Candidates and Implementing
									    Organizations in advance in connection with employment placement under the business tie-up of both parties.
									</p>

									    <h4>Article 11 (Confidentiality)</h4>
									<p class="no-att">
									    The Sending Organization and the Supervising Organization shall use personal information obtained by the provisions of this Chapter only for employment
									    placement under the business tie-up of both parties, manage it properly and be responsible for confidentiality of such information.
									</p>

									    <h4>Article 12 (Share of Expenses for Employment Placement)</h4>
								</div>
								<div class="page-5" style="padding-left:20px;padding-right: 20px">
									<p class="new-page mB10" style="padding-top: 50px">
									    1. In connection with necessary expenses in carrying out employment placement under the business tie-up of the Sending Organization and the Supervising
									    Organization (hereinafter referred to as the “Expenses for Employment Placement”), both parties shall decide expense bearers and burden ratio between them
									    after consultation based on the roles and duties specified in the provisions of this Chapter.
									</p>
									<p class="mB10">
									    2. The Expenses for Employment Placement set forth in the preceding paragraph shall be settled separately by clearly dividing Management Expenses for
									    Sending Technical Intern Trainees set forth in the Article 23, Miscellaneous Expenses Required for Sending Technical Intern Trainees set forth in the
									    Article 24 and Expenses for Supervision of Technical Intern Trainees set forth in the Article 25.
									</p>
									<p class="mB10">
									    3. Any of the expenses that the Supervising Organization is supposed to bear pursuant to the provisions of the above paragraph 1 shall not be collected
									    from the Technical Intern Trainee Candidates and Implementing Organizations.
									</p>
									    <h4>Article 13 (Selection of Technical Intern Trainees)</h4>

									<p class="no-att">
									    Through employment placement set forth in this Chapter, the Technical Intern Trainee Candidates shall become technical intern trainees by concluding
									    employment contracts with Implementing Organizations and completing procedures of entry into Japan.
									</p>

									    <h3>Chapter 4 Treatment of Technical Intern Trainees</h3>
									    <h4>Article 14 (Treatment of Technical Intern Trainees)</h4>
									<p>
									    1. Treatment during the period of lectures implemented just after entry into Japan, shall be as follows:
									</p>
									<p>
									    　(1) During the period of lectures at the beginning of entry into Japan, the Supervising Organization shall pay directly in full, once a month on a
									    designated day, allowance covering actual living expenses so that they could maintain the living standard of average Japanese. This allowance for lectures
									    including food expenses shall be fixed in Japanese Yen monthly per person as follows: allowance for lectures per month:<input type="text" value="" style="width: 80px;"> yen. If it is paid in cash, the receipt seal or receipt signature ofthe technical intern trainee himself/herself shall be required.<br>
									    In case transportation fees for lectures occur in Japan, actual expenses shall be paid to technical intern trainees, in addition to allowance for lectures.
									</p>
									<p>
									    　(2) In connection with accommodation during the period of lectures, the Supervising Organization shall secure and provide it to technical intern trainees
									    free of charge. Accommodation shall be furnished with equipments which are necessary for daily life.
									</p>
									<p>
									    　(3) The hours of lectures shall not exceed 40 hours a week and it shall not be given during other time and days designated in advance.
									</p>
									<p>
									    　(4) The Supervising Organization shall buy private accident insurance such as comprehensive insurance for foreign technical intern trainees and take
									    securing measures for the cases of death, injury or illness during the period of lectures.
									</p>
								</div>
								<div class="page-6" style="padding-left:20px;padding-right: 20px">
									<p class="new-page" style="padding-top: 50px;">
									    2. Treatment during the period of technical intern training (except for the period of lectures) shall be as follows:
									</p>
									<p>
									    　(1) After completion of the lectures, technical intern trainees shall engage in technical intern training activities under the employment contract with the
									    Implementing Organization and the said employment contract shall be concluded in connection with procedures of entry into Japan and become effective after
									    completion of the lectures. In addition, notification of Employment Terms and Conditions for technical intern trainees shall be delivered to them both in
									    their own language and in Japanese when the Implementing Organization concludes the employment contract.
									</p>
									<p>
									    　(2) The Implementing Organization shall pay wage to technical intern trainees directly in full, on a designated day every month. Apart from deduction of
									    taxes and social insurance stipulated in the laws and regulations in Japan, some items shall be deducted from wage within the scope of the agreement
									    between management and labor where such deductions are approved by both parties. However, the amount to be deducted under the said agreement shall not
									    exceed actual expenses.<br>
									    Furthermore, in case of paying wages in cash, the Implementing Organization shall provide technical intern trainees with the wage payment details and
									    collect seal or receipt signature from technical intern trainees for the payroll book. In case of bank transfer, the Implementing Organization shall
									    conclude an agreement on bank transfer between management and labor, obtain consent of technical intern trainees and provide them with the wage payment
									    details.<br>
									    In addition, if business trip expenses occur in Japan during the period of technical intern training, the Implementing Organization shall pay allowances
									    including business trip expenses to technical intern trainees pursuant to the provisions of the rules of the Implementing Organization.
									</p>
									<p>
									    　(3) In connection with accommodation during the period of technical intern training, the Supervising Organization or the Implementing Organization shall
									    secure and provide it to technical intern trainees free of charge or with charge.
									</p>
									<p class="mB10">
									    　(4) Designated working hours during the period of technical intern trainees shall, in principle, not exceed 40 hours a week and not exceed eight hours a
									    day except for break. If, however, an agreement between management and labor is concluded, the Implementing Organization may let technical intern trainees
									    work overtime and on holidays within the scope of such agreement. When they work overtime, the Implementing Organization shall pay extra wages. In
									    addition, even in cases where the Implementing Organization let technical intern trainees work overtime, on holidays or at midnight, the Implementing
									    Organization shall consider circumstances so that technical intern trainees may not work for long hours according to the purposes of the TITP and establish
									    a system where the Implementing Organization can guide technical intern trainees.
									</p>

									    <h4>Article 15 (Prohibition of Collection of Deposit)</h4>
									<p class="mB10">
									    1. The Sending Organization, the Supervising Organization or the Implementing Organization (hereinafter in this Article referred to as the “Sending
									    Organization, etc.”) shall not collect deposit from technical intern trainees or their spouse, direct relatives or relatives living together and any other
									    persons who have close relationship with technical intern trainees in social life (hereinafter in this Article referred to as the “Technical Intern
									    Trainees, etc.”) in connection with technical intern training in which said technical intern trainees engage in Japan.
									</p>
								</div>
								<div class="page-7" style="padding-left:20px;padding-right: 20px">
										<p class="new-page mB10" style="padding-top: 50px;">
									    2. In connection with technical intern training in which technical intern trainees engage in Japan, the Sending Organization, etc. shall not control money
									    and other properties of the said Technical Interns Trainees, etc. under any nominal terms whatsoever, and shall not plan to do so until completion of the
									    said technical intern training.
									</p>
									<p class="mB10">
									    3. The Sending Organizations, etc. shall not conclude an agreement with Technical Intern Trainees, etc. on payment of penalty concerning non-performance of
									    the employment contract and on unfair transfer of any other money or properties, and shall not plan to do so until completion of the said technical intern
									    training.
									</p>
									    <h4>Article 16 (Suspension of Technical Intern Training)</h4>
									<p class="no-att">
									    If a technical intern trainee corresponds to any of the followings, the Sending Organization, the Supervising Organization and the Implementing
									    Organization shall inquire circumstances from the technical intern trainee himself/herself, consult with one another and then may suspend the technical
									    intern training of the said technical intern trainee, and have him/her return home.
									</p>
									<p>
									    　(1) In case of violation of the Article 6;
									</p>
									<p>
									    　(2) In case of violation of the Article 20(4); and
									</p>
									<p class="mB10">
									    　(3) In case where, due to circumstances attributing to the responsibility of the said technical intern trainee himself/herself, continuation of technical
									    intern training is difficult or improper.
									</p>

									    <h4>Article 17 (Temporary Return of Technical Intern Trainees)</h4>

									<p class="no-att">
									    In connection with temporary return to their home countries of technical intern trainees with status of residence “Technical Intern (i)(b)” or “Technical
									    Intern (ii)(b)” during their stay in Japan, temporary return within 7 days can be permitted when the Supervising Organization and the Implementing
									    Organization find it appropriate to do so and it is done by special re-entry permission procedures (or the Regional Immigration Bureau permits re-entry
									    into Japan).
									</p>
									<p class="no-att">
									    In addition, as to expense bearers, the technical intern trainees, the Sending Organization, the Supervising Organization or the Implementing Organization
									    shall consult and decide who shall bear it according to the reasons for temporary return.
									</p>

									    <h3>Chapter 5 Roles and Duties of Sending Organization and Supervising Organization</h3>

									    <h4>Article 18 (Roles and Duties of the Sending Organization)</h4>
									<p class="no-att">
									    The Sending Organization shall assume the following roles and duties in addition to those specified in each article of this Agreement.
									</p>
									<p>
									    　(1) Placement of a person in charge of management or communication concerning the TITP;
									</p>
									<p>
									    　(2) Implementation of legal procedures to the authority in their own country concerning entry to and stay in Japan of technical intern trainees;
									</p>
									<p>
									    　(3) Selection of Technical Intern Trainee Candidates specified in the Chapter 3;
									</p>
									<p>
									    　(4) Implementation of medical examination (including dental examination) and notification of the result of examination to the Supervising Organization;
									</p>
									<p>
									    　(5) Implementation of or support to lectures, etc. on entrustment basis according to the paragraph 2 and the paragraph 3 of the Article 3. Implementation
									    of orientation before dispatch;
									</p>
								</div>
								<div class="page-8" style="padding-left:20px;padding-right: 20px">
									<p class="new-page" style="padding-top: 50px;">
									    　(6) Preparation of documents necessary for entry into and stay in Japan; and
									</p>
									<p class="mB10">
									    　(7) Coordination with the Supervising Organization and any other work necessary to smooth promotion of the TITP.
									</p>

									    <h4>Article 19 (Roles and Duties of Supervising Organization)</h4>
									<p class="no-att">
									    The Supervising Organization shall assume the following roles and duties in addition to those specified in each article of this Agreement.
									</p>
									<p>
									    　(1) Placement of a person in charge of management or communication concerning the TITP;
									</p>
									<p>
									    　(2) Implementation of legal procedures to the Japanese government for technical intern trainees’ entry and stay in Japan. It does not prevent, however, the
									    Implementing Organization from taking procedures for their stay in Japan;
									</p>
									<p>
									    　(3) Securing of facilities for accommodation and lectures. It includes, however, the case where the Implementing Organization secures accommodation;
									</p>
									<p>
									    　(4) Formulation of technical intern training plans concerning “Technical Intern (i)(b)”;
									</p>
									<p>
									    　(5) Supervision and guidance of proper technical intern training implementation at the Implementing Organization based on the technical intern training
									    plans;
									</p>
									<p>
									    　(6) Supervision and guidance of the Implementing Organization (excluding those specified the preceding item (5));
									</p>
									<p>
									    　(7) Proper response to various consultations from technical intern trainees;
									</p>
									<p>
									    　(8) Securing of new Implementing Organization in the cases where it becomes difficult to continue technical intern training due to the reasons not
									    attributable to the technical intern trainees including bankruptcy of the Implementing Organization (only when the technical intern trainees wish to
									    continue technical intern training); and
									</p>
									<p class="mB10">
									    　(9) Any other work necessary to promote the TITP smoothly including coordination with the Sending Organization.
									</p>

									    <h4>Article 20 (Guidance of Matters to be Observed by Technical Intern Trainees)</h4>
									<p class="no-att">
									    The Sending Organization shall exert effort to ensure that technical intern trainees observe the following matters during their stay in Japan. In addition,
									    the Sending Organization shall cooperate with the Supervising Organization and the Implementing Organization and guide such technical intern trainees so
									    that they may observe theses matters during their stay in Japan.
									</p>
									<p>
									    　(1) They shall complete technical intern training in a faithful attitude according to guidance of Coordinators and Advisers.
									</p>
									<p>
									    　(2) They shall make effective use of the Skills acquired in Japan at their workplace after they return home and contribute to development of industries in
									    their countries.
									</p>
									<p>
									    　(3) They shall stay in Japan alone and shall not invite their families to live together.
									</p>
									<p>
									    　(4) They shall not engage in any other activities to earn income or reward than that admitted by the status of residence.
									</p>
									<p>
									    　(5) During stay in Japan, they shall keep their passports on their own responsibility and take the resident card along.
									</p>
									<p>
									    　(6) They shall return home as soon as they complete their technical intern training.
									</p>
								</div>
								<div class="page-9 " style="padding-left:20px;padding-right: 20px">
									<p class="new-page" style="padding-top: 50px;"></p>
									  <h4>Article 21 (Follow-up after Return Home)</h4>
										<p class="">
									    1. In cooperation with the Sending Organization, the Supervising Organization shall make a follow-up survey to see if the technical intern trainees are
									    using the Skills acquired in Japan after their return home.
									</p>
									<p class="mB10">
									    2. The Sending Organization shall compile the survey results as to whether they are using the Skills acquired in Japan in Kingdom of Cambodia and report
									    them to the Supervising Organization or the Implementing Organization.
									</p>

									    <h4>Article 22 (Measures concerning Accidents/Crimes/Runaway)</h4>
									<p class="no-att">
									    In cases where accident, crimes, and runaway concerning technical intern trainees occur, the Supervising Organization shall immediately report the facts to
									    the Sending Organization and, at the same time, shall take proper measures after consultation with the Sending Organization according to the laws and
									    regulations in Japan.
									</p>

									    <h3>Chapter 6 (Expense Burden, etc.)</h3>
									    <h4>Article 23 (Breakdown of Management Expenses for Sending Technical Intern Trainees)</h4>
									<p class="no-att">
									    In promoting the TITP, the expenses that the Sending Organization needs (hereinafter referred to as the “Management Expenses for Sending Technical Intern
									    Trainees” except for miscellaneous expenses specified in the following Article and Expenses for Employment Placement as to screening and selection of the
									    Technical Intern Trainee Candidates) are as follows:
									</p>
									<p>
									    　(1) The expenses that the Sending Organization needs to prepare medical examination and dental examination to be made by such organization before the
									    Sending Organization dispatch Technical Intern Trainee Candidates and any other expenses accompanied by the said examination;
									</p>
									<p>
									    　(2) The expenses that the Sending Organization needs for giving advance lectures, etc. including Japanese language learning, guidance of lifestyle in Japan
									    and for compensation fee for leave during this period;
									</p>
									<p>
									    　(3) The expenses that the Sending Organization needs for communication with or consultation with the companies in sending countries or the Supervising
									    Organization;
									</p>
									<p>
									    　(4) The expenses that the Sending Organization needs for dispatch of its staff members to Japan to consult with technical intern trainees and to assist
									    them(including expenses for measures in case technical intern trainees are involved in accidents) and
									</p>
									<p class="mB10">
									    　(5) Any other expenses incurred by the Sending Organization for promotion of this Program.
									</p>
									    <h4>Article 24 (Miscellaneous Expenses Required for Sending Technical Intern Trainees)</h4>
									<p class="no-att">
									    The Miscellaneous Expenses Required for Sending Technical Intern Trainees in addition to the expenses specified in the preceding Article are as follows:
									</p>
									<p>
									    　(1) Expense for medical and dental examination;
									</p>
									<p>
									    　(2) Passport and visa application fees;
									</p>
									<p>
									    　(3) Expenses for domestic trip in Kingdom of Cambodia before dispatch to Japan and after returning from Japan, and
									</p>
								</div>
								<div class="page-10" style="padding-left:20px;padding-right: 20px">
										<p class="new-page mB10" style="padding-top: 50px;">
									    　(4) Any other expenses incurred by the Sending Organization in Kingdom of Cambodia in connection of sending technical intern trainees.
									</p>
									    <h4>Article 25 (Breakdown of Expenses for Supervision of Technical Intern Trainees)</h4>
									<p class="no-att">
									    In promoting the Technical Intern Training Program, the expenses that the Supervising Organization needs (hereinafter referred to as the “Expenses for
									    Supervision of Technical Intern Trainees” except for Expenses for Employment Placement concerning screening and selection of the Technical Intern Trainee
									    Candidates) are as follows:
									</p>
									<p>
									    　(1) Expenses required for communication and consultation with the Sending Organization;
									</p>
									<p>
									    　(2) Expenses required for selection of Implementing Organizations;
									</p>
									<p>
									    　(3) Expenses required for preparation for accepting technical intern trainees including holding of explanatory meetings in Japan;
									</p>
									<p>
									    　(4) Round trip expenses specified in the Article 26;
									</p>
									<p>
									    　(5) Expenses required for compensation measures for the case of accidents during the period of lectures;
									</p>
									<p>
									    　(6) Expenses to implement lectures;
									</p>
									<p>
									    　(7) Expenses to supervise Implementing Organizations and to implement guidance for them on a visit basis;
									</p>
									<p>
									    　(8) Expenses to secure accommodation;
									</p>
									<p>
									    　(9) Expenses to take measures in response to consultation with technical intern trainees;
									</p>
									<p>
									    　(10) Expenses to visit sending country to have a meeting and to inspect conditions on TITP, etc. and
									</p>
									<p class="mB10">
									    　(11) Any other expenses incurred by the Supervising Organization for promotion of this program.
									</p>
									    <h4>Article 26 (Burden of Expenses)</h4>
									<p class="no-att">
									    Out of the expenses required for the Technical Intern Training Program, the Management Expenses for Sending Technical Intern Trainees specified in the
									    Article 23 and Miscellaneous Expenses Required for Sending Technical Intern Trainees specified in the Article 24 shall be borne by the Sending Organization
									    and the Supervising Organization to the degree of their proper portion after mutual consultation, and the Expenses for Supervision of Technical Intern
									    Trainees specified in the Article 25 shall be borne by the Supervising Organization and Implementing Organization. The round trip expenses of technical
									    intern trainees to visit Japan for technical intern training and to return home after the training, however, shall be borne by the Supervising Organization
									    and Implementing Organization from the last spot where the technical intern trainees leave their country to the first spot from which they return after
									    completion of technical intern training.
									</p>
									    <h4>Article 27 (Treatment of Management Expenses for Sending Technical Intern Trainees)</h4>
									<p>
									    1. In cases where the Supervising Organization decides to bear a part of the Management Expenses for Sending Technical Intern Trainees specified in the
									    Article 23 and Miscellaneous Expenses Required for Sending Technical Intern Trainees specified in the Article 24, the Supervising Organization shall send
									    the amount which both parties decide to be proper to the Sending Organization. In addition, in this case, the breakdown of the Management Expenses for
									    Sending Technical Intern Trainees and Miscellaneous Expenses Required for Sending Technical Intern Trainees that the Supervising Organization bears shall
									    be notified to the Supervising Organization by the Sending Organization separately.
									</p>
								</div>
								<div class="page-11" style="padding-left:20px;padding-right: 20px">
										<p class="new-page mB10" style="padding-top: 50px;">
									    2. The Management Expenses for Sending Technical Intern Trainees during the period of technical intern training shall be <input type="text" value="" style="width: 80px;"> yen a month per person.
									</p>
									<p class="mB10">
									    3. The Supervising Organization shall collect the Management Expenses for Sending Technical Intern Trainees from the Implementing Organizations every month
									    and send them to the Sending Organization once in 6 months in a lump sum.
									</p>
									<p class="mB10">
									    4. In connection with treatment of the Management Expenses for Sending Technical Intern Trainees, the Supervising Organization shall establish an exclusive
									    bank account, clearly separate it from allowance for lectures and wages to be paid to technical intern trainees and shall not collect such expenses from
									    allowance for lectures and wages of technical intern trainees.
									</p>
									    <h3>Chapter 7 Miscellaneous Provisions</h3>
									    <h4>Article 28 (Interpretation of Agreement)</h4>
									<p class="no-att">
									    If there is a doubt on interpretation of the Articles of this Agreement or if there is a matter not specified in this Agreement, both parties shall consult
									    with each other and decide it in line with the purpose of the TITP.
									</p>
									    <h4>Article 29 (Settlement of Dispute)</h4>
									<p class="no-att">
									    In cases where a dispute arises in connection with the TITP, the Sending Organization and the Supervising Organization shall exert effort to settle it by
									    consultation of the two parties while respecting the purpose of the TITP and the laws and regulations in Japan, and taking into consideration of not
									    hurting good relationship of both parties. In addition, in cases where an unavoidable trouble case occurs by any chance, it shall be settled by judgment of
									    related ministries or the court in Japan.
									</p>
									    <h4>Article 30 (Effectiveness of Agreement)</h4>
									<p class="no-att">
									    This Agreement shall become effective on the date of signature. In cases where guidance is given by related ministries in Japan in connection with the
									    condition infringing on the content of this Agreement or a matter not specified in this Agreement, however, the parties concerned shall comply with it and
									    the Supervising Organization shall immediately notify the Sending Organization of the content of the said matter in writing. Thereafter, the content of the
									    said matter shall apply in priority to this Agreement.
									</p>
									    <h4>Article 31 (Termination of Agreement)</h4>
									<p>
									    This Agreement shall be terminated by any of the following cases and cease to be effective.
									</p>
									<p>
									    　(1) In case where the TITP targeted by this Agreement is completed (The termination date of this Agreement shall be the completion date of the TITP.) and
									</p>
								</div>
								<div class="page-12" style="padding-left:20px;padding-right: 20px">
										<p class="new-page mB10" style="padding-top: 50px;">
									    　(2) In case where continuance of technical intern training becomes impossible during the process of it and technical intern trainees return home (In this
									    case, the Supervising Organization shall notify the Sending Organization to that effect in writing and the termination date of this Agreement shall be the
									    sending date of such document.).
									</p>
									<p class="no-att">
									    IN WITNESS WHEREOF, the parties hereto have executed this Agreement both in Japanese and in the language of English in duplicate by placing their
									    signatures thereon, and each party shall keep one copy of the originals.
									</p>
								</div>
									<div class="box-9" style="height: 100px;">
										<div style="float: left;width: 315px;margin-left: 50px;">
											<p align="center">
												（Sending Organization）
											</p>
											<p>
												Kingdom of Cambodia
											</p>
											<p>
												<input type="text" name="" value="<?php echo $agent[0]['Agent']['agent_en'] ?>" >
											</p>
											<p class="mB20">
												Exective Director  <input type="text" value="<?php echo $agent[0]['Agent']['rep_family_name_en']." ".$agent[0]['Agent']['rep_given_name_en'] ?>">
											</p>
											<p>
												Signature<u>　　　　　　　　　　</u><u> </u><u>　</u>
											</p>
										</div>
										<div style="float: left;width: 325px">
											<p align="center">
											    （Supervising Organization）
											</p>
											<p>
											    Japan
											</p>
											<p>
											    <input type="text" value="<?php echo $interview_prof[0]['Association']['association_en'] ?>" style="width: 250px" >
											</p>
											<p class="mB20">
											    Exective Director  <input type="text" value="<?php echo $interview_prof[0]['Association']['rep_family_name_en']." ". $interview_prof[0]['Association']['rep_given_name_en']?>" style="width: 200px" >
											</p>
											<p>
											   Signature<u>　　　　　　　　　　</u><u> </u><u>　</u>
											</p>
										</div>
									</div>
									<p align="center" style="margin-top: 50px;">
									    In Kingdom of Cambodia on , <input type="text" value="    /    / 20" style="width: 200px">
									</p>
								</div>



								</div>
							</div>

							</div>
						</div>

	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
		$(function(){
			$('.md-modal').remove();
		});
	<?php $this->Html->scriptEnd(); ?>