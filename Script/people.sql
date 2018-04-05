
   DROP TABLE IF EXISTS users CASCADE;
   CREATE TABLE users(
   	user_id VARCHAR(20) PRIMARY KEY,
   	password VARCHAR(32) NOT  NULL,
   	user_type CHAR(1) NOT  NULL,
   	email_address VARCHAR(256) NOT  NULL,
   	enrol_date DATE NOT  NULL,
   	last_access DATE NOT  NULL
   );
INSERT INTO users(user_id, password, user_type, email_address, enrol_date,last_access) VALUES(
	'darrenp', md5('webd3201') , 'A' , 'Darren.Puffer@durhamcollege.ca' , '2016-1-1' , '2016-2-1' );
INSERT INTO users(user_id, password, user_type, email_address, enrol_date,last_access) VALUES(
	'kyreneh', md5('webd3201') , 'A' , 'kyrene.hemington@dcmail.ca' , '2016-1-1' , '2016-2-1' );
INSERT INTO users(user_id, password, user_type, email_address, enrol_date,last_access) VALUES(
	'nickc', md5('webd3201') , 'A' , 'nicholas.carpenter@dcmail.ca' , '2016-1-1' , '2016-2-1' );
INSERT INTO users(user_id, password, user_type, email_address, enrol_date,last_access) VALUES(
	'mattheww', md5('webd3201') , 'A' , 'matthew.wierzbicki@dcmail.ca' , '2016-1-1' , '2016-2-1' );
INSERT INTO users(user_id, password, user_type, email_address, enrol_date,last_access) VALUES(
	'simons', md5('webd3201') , 'A' , 'simon.stoll@dcmail.ca' , '2016-1-1' , '2016-2-1' );
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('joachimm' , md5('webd3201') , 'G' , 'maximo.joachim@hotmail.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('conlyd' , md5('webd3201') , 'C' , 'dakota.conly@outlook.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('breenm' , md5('webd3201') , 'P' , 'mickey.breen@outlook.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('harjop' , md5('webd3201') , 'C' , 'pandora.harjo@yahoo.ca' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('tarttm' , md5('webd3201') , 'C' , 'martina.tartt@rogers.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('strozierw' , md5('webd3201') , 'C' , 'wilmer.strozier@hotmail.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('pilis' , md5('webd3201') , 'G' , 'saundra.pili@rogers.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('wohlersk' , md5('webd3201') , 'C' , 'keneth.wohlers@hotmail.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('chafetzt' , md5('webd3201') , 'I' , 'terrell.chafetz@realtor.ca' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('minierw' , md5('webd3201') , 'C' , 'wilbert.minier@outlook.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('deierleino' , md5('webd3201') , 'G' , 'oda.deierlein@gmail.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('pevetoa' , md5('webd3201') , 'I' , 'anabel.peveto@gmail.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('merlinig' , md5('webd3201') , 'C' , 'georgina.merlini@gmail.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('weatherbees' , md5('webd3201') , 'P' , 'shonda.weatherbee@yahoo.ca' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('lograssoi' , md5('webd3201') , 'P' , 'ines.lograsso@rogers.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('boben' , md5('webd3201') , 'C' , 'nestor.bobe@hotmail.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('brisbine' , md5('webd3201') , 'G' , 'emory.brisbin@outlook.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('strassnerr' , md5('webd3201') , 'C' , 'renna.strassner@outlook.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('basilc' , md5('webd3201') , 'D' , 'clement.basil@hotmail.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('pestonee' , md5('webd3201') , 'C' , 'eveline.pestone@rogers.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('rodarmelt' , md5('webd3201') , 'C' , 'tyron.rodarmel@rogers.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('romanicks' , md5('webd3201') , 'C' , 'sandra.romanick@hotmail.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('stonebackc' , md5('webd3201') , 'C' , 'chang.stoneback@rogers.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('sarberl' , md5('webd3201') , 'C' , 'lue.sarber@yahoo.ca' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('fagnantn' , md5('webd3201') , 'G' , 'noriko.fagnant@outlook.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('woodromem' , md5('webd3201') , 'G' , 'mae.woodrome@yahoo.ca' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('schanka' , md5('webd3201') , 'C' , 'adelina.schank@realtor.ca' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('hoshawm' , md5('webd3201') , 'C' , 'maurine.hoshaw@realtor.ca' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('peshk' , md5('webd3201') , 'C' , 'keven.pesh@realtor.ca' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('spary' , md5('webd3201') , 'C' , 'yesenia.spar@outlook.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('handwerks' , md5('webd3201') , 'G' , 'sherril.handwerk@rogers.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('galiotom' , md5('webd3201') , 'C' , 'mina.galioto@rogers.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('kannelm' , md5('webd3201') , 'C' , 'makeda.kannel@gmail.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('jarryr' , md5('webd3201') , 'P' , 'reanna.jarry@rogers.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('baunec' , md5('webd3201') , 'C' , 'chassidy.baune@hotmail.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('barrigab' , md5('webd3201') , 'P' , 'bernita.barriga@hotmail.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('villantea' , md5('webd3201') , 'C' , 'arnulfo.villante@yahoo.ca' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('everidgez' , md5('webd3201') , 'G' , 'zane.everidge@outlook.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('tarinl' , md5('webd3201') , 'D' , 'louis.tarin@hotmail.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('mcnelist' , md5('webd3201') , 'G' , 'thad.mcnelis@outlook.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('litzauc' , md5('webd3201') , 'I' , 'conrad.litzau@realtor.ca' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('mellorsb' , md5('webd3201') , 'C' , 'bill.mellors@realtor.ca' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('fallonee' , md5('webd3201') , 'C' , 'easter.fallone@outlook.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('shamast' , md5('webd3201') , 'C' , 'tressie.shamas@hotmail.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('montemayore' , md5('webd3201') , 'G' , 'eldon.montemayor@yahoo.ca' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('vankirks' , md5('webd3201') , 'C' , 'staci.vankirk@gmail.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('champouxf' , md5('webd3201') , 'C' , 'fidel.champoux@rogers.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('twiddyw' , md5('webd3201') , 'C' , 'willy.twiddy@outlook.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('mchughd' , md5('webd3201') , 'C' , 'demetra.mchugh@gmail.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('santoyoa' , md5('webd3201') , 'C' , 'ann.santoyo@rogers.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('dishongh' , md5('webd3201') , 'P' , 'hershel.dishong@rogers.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('stoltzfusm' , md5('webd3201') , 'C' , 'morris.stoltzfus@gmail.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('skaffj' , md5('webd3201') , 'C' , 'jinny.skaff@realtor.ca' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('farinod' , md5('webd3201') , 'G' , 'domingo.farino@rogers.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('kotlowskia' , md5('webd3201') , 'C' , 'alvin.kotlowski@outlook.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('zahnenb' , md5('webd3201') , 'G' , 'breanna.zahnen@rogers.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('lauferr' , md5('webd3201') , 'G' , 'ranee.laufer@rogers.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('dusinge' , md5('webd3201') , 'C' , 'elene.dusing@yahoo.ca' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('dueyl' , md5('webd3201') , 'C' , 'lucius.duey@hotmail.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('catoel' , md5('webd3201') , 'C' , 'logan.catoe@gmail.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('dettmanl' , md5('webd3201') , 'G' , 'lory.dettman@outlook.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('nadels' , md5('webd3201') , 'I' , 'shirley.nadel@hotmail.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('hazerb' , md5('webd3201') , 'I' , 'bridget.hazer@outlook.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('tyreej' , md5('webd3201') , 'C' , 'jonah.tyree@gmail.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('aeschlimang' , md5('webd3201') , 'C' , 'glennie.aeschliman@rogers.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('oyers' , md5('webd3201') , 'C' , 'salvatore.oyer@yahoo.ca' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('jowersi' , md5('webd3201') , 'G' , 'inga.jowers@rogers.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('greccop' , md5('webd3201') , 'C' , 'palma.grecco@gmail.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('pechaceke' , md5('webd3201') , 'P' , 'erasmo.pechacek@gmail.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('wishumc' , md5('webd3201') , 'C' , 'candace.wishum@outlook.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('kazeee' , md5('webd3201') , 'C' , 'emily.kazee@realtor.ca' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('adneyr' , md5('webd3201') , 'P' , 'rene.adney@realtor.ca' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('beaushawh' , md5('webd3201') , 'C' , 'henry.beaushaw@gmail.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('lambornej' , md5('webd3201') , 'D' , 'joaquina.lamborne@hotmail.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('saundersv' , md5('webd3201') , 'I' , 'vallie.saunders@outlook.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('paulinem' , md5('webd3201') , 'C' , 'mohammad.pauline@yahoo.ca' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('preisserr' , md5('webd3201') , 'G' , 'racquel.preisser@realtor.ca' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('humess' , md5('webd3201') , 'D' , 'santo.humes@yahoo.ca' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('tellisr' , md5('webd3201') , 'G' , 'roland.tellis@hotmail.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('manalangl' , md5('webd3201') , 'D' , 'louetta.manalang@gmail.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('queenj' , md5('webd3201') , 'C' , 'judi.queen@hotmail.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('matturroh' , md5('webd3201') , 'C' , 'hoa.matturro@realtor.ca' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('lalondes' , md5('webd3201') , 'G' , 'salena.lalonde@hotmail.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('azbilla' , md5('webd3201') , 'D' , 'andre.azbill@yahoo.ca' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('bradace' , md5('webd3201') , 'C' , 'emilie.bradac@hotmail.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('loretteb' , md5('webd3201') , 'I' , 'barbera.lorette@yahoo.ca' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('favera' , md5('webd3201') , 'C' , 'albert.faver@realtor.ca' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('milnesr' , md5('webd3201') , 'D' , 'rochelle.milnes@gmail.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('estlerp' , md5('webd3201') , 'C' , 'polly.estler@outlook.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('lafleurs' , md5('webd3201') , 'C' , 'soon.lafleur@realtor.ca' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('ciaccioc' , md5('webd3201') , 'C' , 'cruz.ciaccio@hotmail.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('ziererd' , md5('webd3201') , 'G' , 'divina.zierer@gmail.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('forbisa' , md5('webd3201') , 'C' , 'amira.forbis@rogers.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('feinenp' , md5('webd3201') , 'C' , 'page.feinen@realtor.ca' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('rambertc' , md5('webd3201') , 'I' , 'chara.rambert@hotmail.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('doyerp' , md5('webd3201') , 'P' , 'phung.doyer@outlook.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('haubrickc' , md5('webd3201') , 'C' , 'carlie.haubrick@hotmail.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('matzenr' , md5('webd3201') , 'C' , 'rosia.matzen@outlook.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('napierm' , md5('webd3201') , 'C' , 'mel.napier@outlook.com' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('emchm' , md5('webd3201') , 'D' , 'marita.emch@yahoo.ca' , '2016-10-10' , '2016-10-10');
INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)
VALUES('kovacke' , md5('webd3201') , 'C' , 'epifania.kovack@realtor.ca' , '2016-10-10' , '2016-10-10');
