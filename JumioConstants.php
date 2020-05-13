<?php

class JumioConstants {
	
	const COUNTRY_LIST_CACHE_DAYS = 7;
	
	
	/**
	* IPs we will accept a callback from
	**/
	public static $callback_server_ips = array(
		// US data centre
		'34.202.241.227',
		'34.226.103.119',
		'34.226.254.127',
		'50.57.26.248',
		'50.57.26.249',
		'52.52.51.178',
		'52.53.95.123',
		'54.67.101.173',
		'69.20.24.138',
		'162.242.200.222',
		
		// EU data centre
		'34.253.41.236',
		'35.157.27.193',
		'52.48.0.25',
		'52.57.194.92',
		'52.58.113.86',
		'52.209.180.134',
		'162.13.228.132',
		'162.13.228.134',
		'162.13.229.103',
		'162.13.229.104',
	);


	/**
	 * A passport issued by the check country,
	 *
	 * e.g. AU check => AU passport is domestic
	 */
	const DOC_DOMESTIC_PASSPORT = 'PASSPORT';
	const DOC_DRIVING_LICENSE = 'DRIVING_LICENSE';
	const DOC_ID_CARD = 'ID_CARD';

	/**
	 * A passport issued by a country _other_ than the check country
	 *
	 * e.g. I'm in AU, a UK passport is foreign. If I'm doing a UK check then an AU
	 * passport would be foreign etc
	 */
	const DOC_FOREIGN_PASSPORT = 'FOREIGN_PASSPORT';
	const DOC_FOREIGN_DRIVING_LICENSE = 'FOREIGN_DRIVING_LICENSE';
	const DOC_FOREIGN_ID_CARD = 'FOREIGN_ID_CARD';

	/**
	 * Other doc types
	 */
	const DOC_MARRIAGE = 'MARRIAGE';
	const DOC_CHANGENAME = 'CHANGENAME';
	const DOC_BIRTH_CERTIFICATE = 'BC';
	const DOC_CITIZEN = 'CIT';
	const DOC_IMMIGRATION_EVIDENCE = 'ISC';
	const DOC_BIRTH_EXTRACT = 'BE';
	const DOC_BANK_STATEMENT = 'BS';
	const DOC_COUNCIL_RATES = 'CB';
	const DOC_CREDIT_CARD = 'CC';
	const DOC_DEBIT_CARD = 'DEBITCARD';
	const DOC_BANK_CARD = 'BANKCARD';
	const DOC_AU_CENTRELINK = 'HCC';
	const DOC_PRIVATE_HEALTH_CARD = 'IC';
	const DOC_AU_MEDICARE = 'MEDC';
	const DOC_PHONE_BILL = 'PB';
	const DOC_SENIORS_CARD = 'SENC';
	const DOC_STUDENT_CARD = 'STUC';
	const DOC_TAX_NOTIC = 'TR';
	const DOC_UTILITY_BILL = 'UB';
	const DOC_VEHICLE_RENEWAL = 'VT';
	const DOC_VEHICLE_INSURANC = 'VI';
	const DOC_PROOF_OF_AGE = 'POA';
	const DOC_ENROLMENT_AEC = 'AEC';
	const DOC_VISA = 'VISA';
	const DOC_FIREARMS = 'FIREARM';
	const DOC_AU_IMMICARD = 'AU_IMMI';
	const DOC_AU_DFAT_IDENTITY_CERT = 'AU_IDENTCERT';
	const DOC_AU_DFAT_IDENTITY_DOC = 'AU_IDENTDOC';
	const DOC_RESIDENT_STATUS = 'RESISTAT';
	const DOC_FORGN_GOV = 'FORGN_GOV';
	const DOC_FORGN_BC = 'FORGN_BC';
	const DOC_AU_DFAT_TRAV_SEC = 'AU_TRAVSEC';
	const DOC_LIC_SEC_GUARD = 'LIC_SEC_GUARD';
	const DOC_LIC_CROWD_CTRL = 'LIC_CROWD_CTRL';
	const DOC_AU_DFAT_CONS_PHOTO = 'AU_CONSPHOTO';
	const DOC_PHOTO_POLICE = 'PHOTO_POLICE';
	const DOC_PHOTO_DEFENCE = 'PHOTO_DEFENCE';
	const DOC_PHOTO_GOVERNMENT = 'PHOTO_GOVERNMENT';
	const DOC_AVIATION_SEC = 'AVIATION_SEC';
	const DOC_MARITIME_SEC = 'MARITIME_SEC';
	const DOC_CRED_REF = 'CRED_REF';
	const DOC_ACADEMIC_TRANS = 'ACADEMIC_TRANS';
	const DOC_TRUST_REF = 'TRUST_REF';
	const DOC_BILL_COUNCIL = 'BILL_COUNCIL';
	const DOC_BILL_ELEC = 'BILL_ELEC';
	const DOC_BILL_GAS = 'BILL_GAS';
	const DOC_BILL_MOBILE = 'BILL_MOBILE';
	const DOC_BILL_LANDLINE = 'BILL_LANDLINE';
	const DOC_BILL_INTERNET = 'BILL_INTERNET';
	const DOC_ATO_NOTICE = 'ATO_NOTICE';
	const DOC_TRADE_ASSOC_CARD = 'TRADE_ASSOC_CARD';

	/**
	 * Primary InstantID documents - these are actually processed by NetVerify.
	 *
	 * The keys are the NetVerify document types, don't change these.
	 * These documents are stored in the "person_netverify_verifications" table.
	 *
	 * This list should only be used for CURRENTLY ACCEPTED documents
	 *
	 * TODO: Remove need for labels in this array
	 */
	public static $primary_documents = array(
		'PASSPORT' => 'Passport',
		'DRIVING_LICENSE' => 'Drivers License',
		'ID_CARD' => 'Proof of age card',
	);
	
	
	/**
	 * Secondary InstantID documents - not processed by NetVerify but only seen locally.
	 *
	 * The keys are whatever we want them to be.
	 * These documents are stored in the "person_netverify_documents" table.
	 *
	 * This list should only be used for CURRENTLY ACCEPTED documents
	 *
	 * TODO: Remove need for labels in this array
	 * TODO: Should the FOREIGN_* netverify-shunted-across docs be here?
	 */
	public static $secondary_documents = array(
		'MARRIAGE' => 'Marriage certificate',
		'CHANGENAME' => 'Change of name certificate',

		'BC' => 'Australian birth certificate',
		'RESISTAT' => 'Certificate of residence status',
		'VISA' => 'Resident or tourist visa',
		'AU_IMMI' => 'ImmiCard',
		'AU_IDENTCERT' => 'Certificate of identity (DFAT)',
		'AU_IDENTDOC' => 'Document of identity (DFAT)',
		'CIT' => 'Citizenship certificate',

		'FOREIGN_PASSPORT' => 'Foreign passport',
		'FIREARM' => 'Firearms license',

		'MEDC' => 'Medicare card',
		'CC' => 'Credit card',
		'DEBITCARD' => 'Debit card',
		'BANKCARD' => 'Bank (eftpos) card',
		'HCC' => 'Centrelink concession card',
		'STUC' => 'Student card',
		'FORGN_GOV' => 'Foreign government-issued document',
		'FORGN_BC' => 'Foreign birth certificate',
		'FOREIGN_DRIVING_LICENSE' => 'Foreign drivers license',
		'FOREIGN_ID_CARD' => 'Foreign id card',
		'AEC' => 'Enrolment to vote (AEC)',
		'AU_TRAVSEC' => 'Convention travel document secondary (DFAT)',
		'LIC_SEC_GUARD' => 'Security guard licence',
		'LIC_CROWD_CTRL' => 'Crowd control licence',
		'AU_CONSPHOTO' => 'Consular photo id card (DFAT)',
		'PHOTO_POLICE' => 'Police photo id card',
		'PHOTO_DEFENCE' => 'Defence photo id card (ADF)',
		'PHOTO_GOVERNMENT' => 'Government employee photo id card',
		'AVIATION_SEC' => 'Aviation security id card',
		'MARITIME_SEC' => 'Maritime security id card',
		'CRED_REF' => 'Credit reference check',
		'ACADEMIC_TRANS' => 'Academic university transcript',
		'TRUST_REF' => 'Trusted referees report',
		'BILL_COUNCIL' => 'Council rates notice',
		'BILL_ELEC' => 'Electricity bill',
		'BILL_GAS' => 'Gas bill',
		'BILL_MOBILE' => 'Mobile phone bill',
		'BILL_LANDLINE' => 'Landline phone bill',
		'BILL_INTERNET' => 'Internet bill',
		'ATO_NOTICE' => 'ATO Notice of assessment',
		'IC' => 'Private health insurance card',
		'TRADE_ASSOC_CARD' => 'Trade association card',
	);


	/**
	 * Names of documents, for use on user interface elements
	 *
	 * This list contains both CURRENT and HISTORICAL documents, so that old data continues to work
	 */
	public static $document_label = array(
		'CHANGENAME' => 'Change of name certificate',

		// Commencement
		'PASSPORT' => 'Passport',
		'BC' => 'Australian Birth Certificate',
		'RESISTAT' => 'Certificate of Residence Status',
		'VISA' => 'Resident or Tourist Visa',
		'AU_IMMI' => 'ImmiCard',
		'AU_IDENTCERT' => 'Certificate of Identity (DFAT)',
		'AU_IDENTDOC' => 'Document of Identity (DFAT)',
		'CIT' => 'Citizenship certificate',

		// Primary
		'DRIVING_LICENSE' => 'Drivers License',
		'ID_CARD' => 'Proof of Age Card',
		'FOREIGN_PASSPORT' => 'Foreign Passport',
		'FIREARM' => 'Firearms License',
		'MARRIAGE' => 'Marriage Certificate',

		// Secondary
		'MEDC' => 'Medicare card',
		'CC' => 'Credit card',
		'DEBITCARD' => 'Debit card',
		'BANKCARD' => 'Bank (eftpos) card',
		'HCC' => 'Centrelink concession card',
		'STUC' => 'Student card',
		'FORGN_GOV' => 'Foreign government-issued document',
		'FORGN_BC' => 'Foreign birth certificate',
		'FOREIGN_DRIVING_LICENSE' => 'Foreign drivers license',
		'FOREIGN_ID_CARD' => 'Foreign id card',
		'AEC' => 'Enrolment to vote (AEC)',
		'AU_TRAVSEC' => 'Convention travel document secondary (DFAT)',
		'LIC_SEC_GUARD' => 'Security guard licence',
		'LIC_CROWD_CTRL' => 'Crowd control licence',
		'AU_CONSPHOTO' => 'Consular photo id card (DFAT)',
		'PHOTO_POLICE' => 'Police photo id card',
		'PHOTO_DEFENCE' => 'Defence photo id card (ADF)',
		'PHOTO_GOVERNMENT' => 'Government employee photo id card',
		'AVIATION_SEC' => 'Aviation security id card',
		'MARITIME_SEC' => 'Maritime security id card',
		'CRED_REF' => 'Credit reference check',
		'ACADEMIC_TRANS' => 'Academic university transcript',
		'TRUST_REF' => 'Trusted referees report',
		'BILL_COUNCIL' => 'Council rates notice',
		'BILL_ELEC' => 'Electricity bill',
		'BILL_GAS' => 'Gas bill',
		'BILL_MOBILE' => 'Mobile phone bill',
		'BILL_LANDLINE' => 'Landline phone bill',
		'BILL_INTERNET' => 'Internet bill',
		'ATO_NOTICE' => 'ATO Notice of assessment',
		'IC' => 'Private health insurance card',
		'TRADE_ASSOC_CARD' => 'Trade association card',

		// No longer accepted, but may be in old data
		'ISC' => 'Evidence of immigration status card',
		'BE' => 'Birth extract',
		'BS' => 'Bank statement',
		'CB' => 'Council rates',
		'PB' => 'Phone bill',
		'SENC' => 'Seniors card',
		'STUC' => 'Student card',
		'TR' => 'Tax notice of assessment',
		'UB' => 'Water, gas or electricity bill',
		'VT' => 'Vehicle registration renewal',
		'VI' => 'Vehicle insurance documents',
		'POA' => 'Proof of age card',
	);


	/**
	 * Alternate labels for the InstantID select list
	 * If not specified here then the label above is used
	 */
	public static $instantid_select_label = [
		'PASSPORT' => 'Australian Passport',
		'DRIVING_LICENSE' => 'Australian Drivers License',
		'ID_CARD' => 'Australian Proof of Age Card',
		'MARRIAGE' => 'Australian Marriage Certificate',
		'FIREARM' => 'Australian Firearms License',
		'FOREIGN_PASSPORT' => 'Foreign Passport',
		'FOREIGN_DRIVING_LICENSE' => 'Foreign Drivers License',
		'FOREIGN_ID_CARD' => 'Foreign ID Card',
	];


	/**
	 * Some additional documents which are accepted via the Direct API only
	 * TODO: Remove this once everyone is compliant
	 */
	public static $legacy_direct_api_documents = [
		'ISC' => 'Evidence of immigration status card',
		'BE' => 'Birth extract',
		'BS' => 'Bank statement',
		'CB' => 'Council rates',
		'PB' => 'Phone bill',
		'SENC' => 'Seniors card',
		'STUC' => 'Student card',
		'TR' => 'Tax notice of assessment',
		'UB' => 'Water, gas or electricity bill',
		'VT' => 'Vehicle registration renewal',
		'VI' => 'Vehicle insurance documents',
		'POA' => 'Proof of age card',
	];


	// These constants are only to make the below array easier
	const GRP_SEC_COMMON = '31 Secondary - common';
	const GRP_SEC_UTILBILLS = '32 Secondary - utility bills';
	const GRP_SEC_DOCUMENTS = '33 Secondary - documents';
	const GRP_SEC_PHOTO_ID = '33 Secondary - photo id cards';
	const GRP_SEC_IMMIGRATE = '34 Secondary - immigration';
	const GRP_SEC_FOREIGN = '35 Secondary - foreign documents';

	/**
	 * Secondary docs get put into sub-groups so it's less horrifying
	 */
	public static $document_display_group = [
		'MEDC' => self::GRP_SEC_COMMON,
		'CC' => self::GRP_SEC_COMMON,
		'DEBITCARD' => self::GRP_SEC_COMMON,
		'BANKCARD' => self::GRP_SEC_COMMON,
		'HCC' => self::GRP_SEC_COMMON,
		'STUC' => self::GRP_SEC_COMMON,
		'IC' => self::GRP_SEC_COMMON,
		'BILL_COUNCIL' => self::GRP_SEC_UTILBILLS,
		'BILL_ELEC' => self::GRP_SEC_UTILBILLS,
		'BILL_GAS' => self::GRP_SEC_UTILBILLS,
		'BILL_MOBILE' => self::GRP_SEC_UTILBILLS,
		'BILL_LANDLINE' => self::GRP_SEC_UTILBILLS,
		'BILL_INTERNET' => self::GRP_SEC_UTILBILLS,
		'FORGN_GOV' => self::GRP_SEC_FOREIGN,
		'FORGN_BC' => self::GRP_SEC_FOREIGN,
		'FOREIGN_DRIVING_LICENSE' => self::GRP_SEC_FOREIGN,
		'FOREIGN_ID_CARD' => self::GRP_SEC_FOREIGN,
		'AEC' => self::GRP_SEC_DOCUMENTS,
		'AU_TRAVSEC' => self::GRP_SEC_IMMIGRATE,
		'AU_IDENTCERT' => self::GRP_SEC_IMMIGRATE,
		'AU_IDENTDOC' =>self::GRP_SEC_IMMIGRATE,
		'LIC_SEC_GUARD' => self::GRP_SEC_PHOTO_ID,
		'LIC_CROWD_CTRL' => self::GRP_SEC_PHOTO_ID,
		'AU_CONSPHOTO' => self::GRP_SEC_IMMIGRATE,
		'PHOTO_POLICE' => self::GRP_SEC_PHOTO_ID,
		'PHOTO_DEFENCE' => self::GRP_SEC_PHOTO_ID,
		'PHOTO_GOVERNMENT' => self::GRP_SEC_PHOTO_ID,
		'AVIATION_SEC' => self::GRP_SEC_PHOTO_ID,
		'MARITIME_SEC' => self::GRP_SEC_PHOTO_ID,
		'TRADE_ASSOC_CARD' => self::GRP_SEC_COMMON,
		'CRED_REF' => self::GRP_SEC_DOCUMENTS,
		'ACADEMIC_TRANS' => self::GRP_SEC_DOCUMENTS,
		'TRUST_REF' => self::GRP_SEC_DOCUMENTS,
		'ATO_NOTICE' => self::GRP_SEC_DOCUMENTS,
	];

	/**
	 * Extra explaining information shown above document groups
	 */
	public static $group_explain_html = [
		'10 Commencement' => '
			<p>All commencement documents must be issued by the <b>Australian Government</b>
			&mdash; foreign documents are not accepted.</p>
		',
		'32 Secondary - utility bills' => '
			<p>Utility bills must be from Australia and show your name and address.</p>
		',
	];


	/**
	 * @var Documents which are accepted as (legal) photographic identification
	 */
	public static $photo_documents = array(
		self::DOC_DOMESTIC_PASSPORT,
		self::DOC_FOREIGN_PASSPORT,
		self::DOC_DRIVING_LICENSE,
		self::DOC_FIREARMS,
	);

	/**
	* Section in the lodge form that a given document counts towards
	**/
	public static $document_section = array(
		'CHANGENAME' => 0,
		'MARRIAGE' => 0,

		'PASSPORT' => 1,
		'BC' => 1,
		'CIT' => 1,
		'ISC' => 1,
		
		'DRIVING_LICENSE' => 2,
		'STUC' => 2,
		'HCC' => 2,
		
		'ID_CARD' => 3,
		'BE' => 3,
		'LOAP' => 3,
		'MEDC' => 3,
		'MOAP' => 3,
		'IC' => 3,
		'SENC' => 3,
		'LAG' => 3,
		'TR' => 3,
		'VT' => 3,
		'VI' => 3,
		'POA' => 3,

		'BS' => 4,
		'CB' => 4,
		'CC' => 4,
		'DEBITCARD' => 4,
		'BANKCARD' => 4,
		'UB' => 4,
		'CB' => 4,
		'PB' => 4,
	);
	
	
	/**
	* Text to provide to the user when uploading documents
	* If instructions are not provided for an ID, the defautls are used
	* If only some images have descriptions (e.g. front but not back), the other images are not offered to the user
	**/
	public static $document_alt_instructions = array(
		'PASSPORT' => array(
			'front' => array(
				'label' => 'Inside',
				'heading' => 'the <b>inside</b> of your <b>passport</b>',
				'desc' => '<p>Provide a photo of the inside of your passport, with the details and photo visible.</p>',
				'icon' => 'passport',
			),
		),
		'BC' => array(
			'front' => array(
				'heading' => 'the <b>front</b> of your <b>birth certificate</b>',
				'desc' => '<p>Your birth certificate must be from Australia.</p>',
				'icon' => 'doc',
			),
		),
		'AEC' => array(
			'front' => array(
				'label' => 'Screenshot',
				'heading' => 'the enrolment screenshot',
				'desc' => '<p>Upload a screenshot showing enrolment information from the AEC website</p>',
				'icon' => 'doc',
			),
		),
		'IC' => array(
			'front' => array(
				'label' => 'Card',
				'heading' => 'your card <b>showing names</b>',
				'desc' => '<p>Provide a photo of the side of your insurance card which shows the names of whose on the insurance.</p>',
				'icon' => 'card',
			),
		),
	);
	
	
	/**
	* The icons for the documents - front-end
	* Files are modules/checks/media/images/icon_XXX.png
	**/
	public static $document_icons = array(
		'PASSPORT' => 'passport',
		'DRIVING_LICENSE' => 'card-with-photo',
		'ID_CARD' => 'card-with-photo',
		'MARRIAGE' => 'marriage',
		'CHANGENAME' => 'doc',
		'BC' => 'doc',
		'CIT' => 'doc',
		'ISC' => 'card',
		'BE' => 'doc',
		'BS' => 'doc',
		'CB' => 'doc',
		'CC' => 'credit-card-front',
		'DEBITCARD' => 'credit-card-front',
		'BANKCARD' => 'bank-card-front',
		'HCC' => 'card',
		'IC' => 'card',
		'MEDC' => 'medicare',
		'PB' => 'doc',
		'SENC' => 'card',
		'STUC' => 'card-with-photo',
		'TR' => 'doc',
		'UB' => 'doc',
		'VT' => 'doc',
		'VI' => 'doc',
		'POA' => 'card',
		'FIREARM' => 'card',
		'VISA' => 'doc',
		'RESISTAT' => 'doc',
		'FORGN_GOV' => 'doc',
		'FORGN_BC' => 'doc',
		'AEC' => 'doc',
		'AU_IMMI' => 'card',
		'AU_IDENTCERT' => 'doc',
		'AU_IDENTDOC' => 'doc',
		'AU_TRAVSEC' => 'doc',
		'LIC_SEC_GUARD' => 'card',
		'LIC_CROWD_CTRL' => 'card',
		'AU_CONSPHOTO' => 'card',
		'PHOTO_POLICE' => 'card',
		'PHOTO_DEFENCE' => 'card',
		'PHOTO_GOVERNMENT' => 'card',
		'AVIATION_SEC' => 'card',
		'MARITIME_SEC' => 'card',
		'CRED_REF' => 'doc',
		'ACADEMIC_TRANS' => 'doc',
		'TRUST_REF' => 'doc',
		'BILL_COUNCIL' => 'doc',
		'BILL_ELEC' => 'doc',
		'BILL_GAS' => 'doc',
		'BILL_MOBILE' => 'doc',
		'BILL_LANDLINE' => 'doc',
		'BILL_INTERNET' => 'doc',
		'ATO_NOTICE' => 'doc',
		'TRADE_ASSOC_CARD' => 'card',

		self::DOC_FOREIGN_PASSPORT => 'passport',    // Stored in db as "PASSPORT" and remapped in the ui code
		self::DOC_FOREIGN_DRIVING_LICENSE => 'card',
		self::DOC_FOREIGN_ID_CARD => 'card',
	);


	/**
	 * Categories of "special provisions" offered
	 * Codes are limited to 15 characters
	 */
	public static $spec_prov_types = [
		'BIRTH_NOT_REG' => 'Persons whose birth was not registered',
		'HOMELESS' => 'People who are homeless',
		'UNDOC_ARRIVE' => 'Undocumented arrivals to Australia',
		'LIVE_REMOTE' => 'People living in remote areas',
		'TRANS_INTRSEX' => 'People who are transgender or intersex',
		'NAT_DISASTER' => 'People affected by natural disasters',
		'RAISED_FOSTER' => 'People with limited access to identity documents for reasons associate with how they were raised, such as in institutional or foster care',
		'LIMIT_PRT_SOC' => 'People with limited participation in society',
		'YNG_NO_FPRINT' => 'Young people yet to establish a social footprint or evidence of community participation',
	];


	/**
	 * Document types which should show the bank selection list
	 */
	public static $bank_idtypes = [
		'CC',
		'DEBITCARD',
		'BANKCARD',
	];

	/**
	 * List of banks for {credit card, debit card, bank card} id types
	 * Only one card per bank is accepted
	 */
	public static $bank_issuers = [
		'ANZ' => 'ANZ',
		'CBA' => 'CommBank',
		'NAB' => 'NAB',
		'WBC' => 'Westpac',
		'--junk1' => '------',
		'AMP' => 'AMP',
		'AustUnity' => 'Australian Unity',
		'BankAust' => 'Bank Australia (bankmecu)',
		'BankMelb' => 'Bank of Melbourne',
		'BankSA' => 'BankSA',
		'Bankwest' => 'Bankwest',
		'BankQld' => 'Bank of Queensland',
		'BankSyd' => 'Bank of Sydney',
		'Bendigo' => 'Bendigo Bank',
		'Citibank' => 'Citibank',
		'CUA' => 'CUA',
		'EasySt' => 'Easy Street',
		'Firstmac' => 'Firstmac',
		'Heritage' => 'Heritage Bank',
		'HSBC' => 'HSBC',
		'IMB' => 'IMB Bank',
		'ING' => 'ING',
		'Macquarie' => 'Macquarie Bank',
		'ME' => 'ME',
		'MyState' => 'MyState',
		'NewcastlePerm' => 'Newcastle Permanent',
		'PCU' => 'People\'s Choice CU',
		'RaboDirect' => 'RaboDirect',
		'RACQ' => 'RACQ',
		'RAMS' => 'RAMS',
		'StGeorge' => 'St.George',
		'TeachMut' => 'Teachers Mutual Bank',
		'UBank' => 'UBank',
		'--junk2' => '------',
		'--other' => 'Other',
	];


	/**
	* The max number of checks to assign at any given time
	**/
	const ASSIGN_NUM = 5;
	
	/**
	* The max number of checks to assign at any given time
	**/
	const ASSIGN_MAX = 10;
	
	/**
	* The max age of a check, in MySQL `INTERVAL` format
	**/
	const ASSIGN_MAX_AGE = '1 HOUR';
	
	/**
	 * Fraud score threshold to be considred "high risk"
	 */
	const ASSIGN_RISK_THRESH = 30;
	
	
	/**
	 * Netverify upload systems
	 * Asked at the start of the process; determines which view is loaded.
	 * NOTE: Don't confuse these with upload "methods"
	 */
	const UPLOAD_MOBILE = 1;       // SMS to the mobile
	const UPLOAD_MOBDEVICE = 2;    // Identical process to UPLOAD_SCAN
	const UPLOAD_WEBCAM = 3;       // Legacy webcam capture
	const UPLOAD_SCAN = 4;         // Upload field OR mobile capture
	const UPLOAD_TRAD = 5;         // Takes the person out of NV process


	/**
	 * Upload methods, as stored in the verifs/docs tables
	 * NOTE: Don't confuse these with the UPLOAD_* constants
	 */
	public static $upload_methods = [
		'unknown' => 'Unknown',
		'admin' => 'Admin',
		'webcam' => 'Legacy webcam',
		'upload-file' => 'File upload',
		'upload-camera' => 'Mobile device camera',
		'upload-gum' => 'Mobile in-browser camera',
		'automatic' => 'Auto-generated',
	];


	/**
	* Allow forced download of results after this number of seconds
	**/
	const ALLOW_DOWNLOAD = 600;		// 10 mins


	/**
	* Verification statuses which cause the "re-queue" link to show
	**/
	public static $ver_status_resubmit = [
		'DENIED_UNSUPPORTED_ID_TYPE',
		'DENIED_UNSUPPORTED_ID_COUNTRY',
	];


	/**
	* Values for the netverify_status field
	**/
	const STATUS_UNKNOWN = 0;
	const STATUS_PRIOR = 10;        // Prior to the process starting
	const STATUS_APPLICANT = 20;    // Applicant is making changes
	const STATUS_QA = 30;           // QA team is making changes
	const STATUS_DONE = 40;         // Processing is finished
	
	public static $status_names_admin = array(
		self::STATUS_UNKNOWN => 'Unknown OR not using netverify',
		self::STATUS_PRIOR => 'Not yet started',
		self::STATUS_APPLICANT => 'With the applicant',
		self::STATUS_QA => 'With the QA team',
		self::STATUS_DONE => 'Processing complete',
	);
	
	public static $status_names_portal = array(
		self::STATUS_PRIOR => 'Not yet started',
		self::STATUS_APPLICANT => 'Applicant action required',
		self::STATUS_QA => 'NCC QA verification required',
	);
	
	public static $status_api_names = array(
		self::STATUS_UNKNOWN => 'UNKNOWN',
		self::STATUS_PRIOR => 'PRIOR',
		self::STATUS_APPLICANT => 'APPLICANT',
		self::STATUS_QA => 'QA',
		self::STATUS_DONE => 'DONE',
	);
	
}
