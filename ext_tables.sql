#
# Table structure for table 'tx_gefahrenatlas_domain_model_meldung'
#
CREATE TABLE tx_gefahrenatlas_domain_model_meldung (

	kategorie int(11) DEFAULT '0' NOT NULL,
	ort_lat varchar(255) DEFAULT '' NOT NULL,
	ort_lon varchar(255) DEFAULT '' NOT NULL,
	ort_zoom varchar(255) DEFAULT '' NOT NULL,
	strasse varchar(255) DEFAULT '' NOT NULL,
	beschreibung text,
	video varchar(255) DEFAULT '' NOT NULL,
	bild int(11) unsigned DEFAULT '0' NOT NULL,
	email varchar(255) DEFAULT '' NOT NULL,
	melder varchar(255) DEFAULT '' NOT NULL,
	nutzungsbedingungen smallint(5) unsigned DEFAULT '0' NOT NULL,

);
