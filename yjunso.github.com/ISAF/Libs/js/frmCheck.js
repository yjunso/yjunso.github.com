/********************************************************************
*
* Form 관련 스크립트 함수 모음
*
*******************************************************************/

/* 폼 검증  함수
**************************************************************************************************************/
function checkForm(f){
	var fLen = f.elements.length;
	var fObj; // 폼 요소
	var fTyp; // 폼 요소 Type
	var fVal; // 폼 요소 Value
	var fMsg; // 경고 메시지 속성
	var fNum; // 숫자만 입력 속성
	var fMax; // 최대 길이 지정
	var fMin; // 최소 길이 지정
	var fMxN; // 최대값 지정
	var fMnN; // 최소값 지정
	var fMal; // 메일 FORMAT
	for(i=0;i<fLen;i++){
		fObj = f.elements[i];
		fTyp = toUpperCase(fObj.type);
		fVal = fObj.value;
		fMsg = fObj.getAttribute("msg"); // 경고 메시지
		fNum = fObj.getAttribute("chknum"); // 숫자만 기입 가능하도록
		fMax = fObj.getAttribute("maxlen"); // 최대 입력byte 제한
		fMin = fObj.getAttribute("minlen"); // 최소 입력byte 제한
		fMxN = fObj.getAttribute("maxnum"); // 최대 숫자 제한
		fMnN = fObj.getAttribute("minnum"); // 최소 숫자 제한
		fRrn = fObj.getAttribute("chkrrn"); // 주민등록번호 체크
		fBrn = fObj.getAttribute("chkbrn"); // 사업자등록번호 체크
		fFrn = fObj.getAttribute("chkfrn"); // 외국인등록번호 체크
		fMal = fObj.getAttribute("chkmail"); // 이메일 체크

		if(fMsg != null && (fTyp == "TEXT" || fTyp == "HIDDEN" || fTyp == "TEXTAREA" || fTyp == "PASSWORD") && fVal.replace(/ /gi,"") == ""){
			alert(fMsg + " 입력해 주세요");
			if(fTyp != "HIDDEN"){fObj.focus();}
			return false;
		}
		if(fMsg != null && (fTyp == "SELECT-ONE" || fTyp == "SELECT-MULTIPLE") && fVal ==""){
			alert(fMsg + " 선택해 주세요");
			fObj.focus(); return false;
		}
		if(fMsg != null && (fTyp == "RADIO" || fTyp == "CHECKBOX") && checkChecked(fObj) == false){
			alert(fMsg + " 선택해 주세요");
			fObj.focus(); return false;
		}
		if(fNum != null && isNaN(fVal)){
			alert("숫자로만 입력해 주세요");
			fObj.focus(); return false;
		}
		if(fMin != null && fMin > getLen(fVal)){
			alert("입력된 글자의 byte가 "+fMin+"byte보다 커야합니다.");
			fObj.focus(); return false;
		}
		if(fMax != null && fMax < getLen(fVal)){
			alert("입력된 글자의 byte가 "+fMax+"byte보다 작아야합니다.\n(영문 "+fMax+"자, 한글 "+Math.floor(fMax/2)+"자 까지 가능합니다.)");
			fObj.focus(); return false;
		}
		if(fMxN != null && parseInt(fMxN) < parseInt(fVal)){
			alert("입력된 숫자는 "+fMxN+"보다 작아야합니다.");
			fObj.focus(); return false;
		}
		if(fMnN != null && parseInt(fMnN) > parseInt(fVal)){
			alert("입력된 숫자는 "+fMnN+"보다 커야합니다.");
			fObj.focus(); return false;
		}
		if(fRrn != null && checkRRN(fVal) == false && fVal != ""){
			alert("주민등록번호가 올바르지 않습니다");
			fObj.focus(); return false;
		}
		if(fBrn != null && checkBRN(fVal) == false && fVal != ""){
			alert("사업자등록번호가 올바르지 않습니다");
			fObj.focus(); return false;
		}
		if(fFrn != null && checkFRN(fVal) == false && fVal != ""){
			alert("외국인등록번호가 올바르지 않습니다");
			fObj.focus(); return false;
		}
		if(fMal != null && checkEmail(fVal) == false && fVal != ""){
			alert("이메일 주소가 올바르지 않습니다");
			fObj.focus(); return false;
		}
	}
	return true;
}

function checkForm_new(f){
	var fLen = f.elements.length;
	var fObj; // 폼 요소
	var fTyp; // 폼 요소 Type
	var fVal; // 폼 요소 Value
	var fMsg; // 경고 메시지 속성
	var fNum; // 숫자만 입력 속성
	var fMax; // 최대 길이 지정
	var fMin; // 최소 길이 지정
	var fMxN; // 최대값 지정
	var fMnN; // 최소값 지정
	var fMal; // 메일 FORMAT

	for(i=0;i<fLen;i++){
		fObj = f.elements[i];
		fTyp = toUpperCase(fObj.type);
		fVal = fObj.value;
		fMsg = fObj.getAttribute("msg"); // 경고 메시지
		fNum = fObj.getAttribute("chknum"); // 숫자만 기입 가능하도록
		fMax = fObj.getAttribute("maxlen"); // 최대 입력byte 제한
		fMin = fObj.getAttribute("minlen"); // 최소 입력byte 제한
		fMxN = fObj.getAttribute("maxnum"); // 최대 숫자 제한
		fMnN = fObj.getAttribute("minnum"); // 최소 숫자 제한
		fRrn = fObj.getAttribute("chkrrn"); // 주민등록번호 체크
		fBrn = fObj.getAttribute("chkbrn"); // 사업자등록번호 체크
		fFrn = fObj.getAttribute("chkfrn"); // 외국인등록번호 체크
		fMal = fObj.getAttribute("chkmail"); // 이메일 체크

		if(fMsg != null && (fTyp == "TEXT" || fTyp == "HIDDEN" || fTyp == "TEXTAREA" || fTyp == "PASSWORD") && fVal.replace(/ /gi,"") == ""){
			alert(fMsg + " 입력해 주세요");
			return false;
		}
		if(fMsg != null && (fTyp == "SELECT-ONE" || fTyp == "SELECT-MULTIPLE") && fVal ==""){
			alert(fMsg + " 선택해 주세요");
			fObj.focus(); return false;
		}
		if(fMsg != null && (fTyp == "RADIO" || fTyp == "CHECKBOX") && checkChecked(fObj) == false){
			alert(fMsg + " 선택해 주세요");
			fObj.focus(); return false;
		}
		if(fNum != null && isNaN(fVal)){
			alert("숫자로만 입력해 주세요");
			fObj.focus(); return false;
		}
		if(fMin != null && fMin > getLen(fVal)){
			alert("입력된 글자의 byte가 "+fMin+"byte보다 커야합니다.");
			fObj.focus(); return false;
		}
		if(fMax != null && fMax < getLen(fVal)){
			alert("입력된 글자의 byte가 "+fMax+"byte보다 작아야합니다.\n(영문 "+fMax+"자, 한글 "+Math.floor(fMax/2)+"자 까지 가능합니다.)");
			fObj.focus(); return false;
		}
		if(fMxN != null && parseInt(fMxN) < parseInt(fVal)){
			alert("입력된 숫자는 "+fMxN+"보다 작아야합니다.");
			fObj.focus(); return false;
		}
		if(fMnN != null && parseInt(fMnN) > parseInt(fVal)){
			alert("입력된 숫자는 "+fMnN+"보다 커야합니다.");
			fObj.focus(); return false;
		}
		if(fRrn != null && checkRRN(fVal) == false && fVal != ""){
			alert("주민등록번호가 올바르지 않습니다");
			fObj.focus(); return false;
		}
		if(fBrn != null && checkBRN(fVal) == false && fVal != ""){
			alert("사업자등록번호가 올바르지 않습니다");
			fObj.focus(); return false;
		}
		if(fFrn != null && checkFRN(fVal) == false && fVal != ""){
			alert("외국인등록번호가 올바르지 않습니다");
			fObj.focus(); return false;
		}
		if(fMal != null && checkEmail(fVal) == false && fVal != ""){
			alert("이메일 주소가 올바르지 않습니다");
			fObj.focus(); return false;
		}
	}
	return true;
}

// 배열 요소일 경우 checked 된것이 있는지 확인
function checkChecked(obj){
	var fname = obj.form.name;
	var objnm = obj.name;
	var oElem = eval(fname+"."+objnm);
	var ret = false;

	if(typeof(oElem.length) == "undefined"){
		if(oElem.checked){
			ret = true;
		}
	} else{
		for(var i=0;i<oElem.length;i++){
			if(oElem[i].checked){
				ret = true;
			}
		}
	}
	return ret;
}

/* 유효성 체크
**************************************************************************************************************/

// 주민등록번호 유효성 체크(Resident Registration number)
function checkRRN(rrn){
	// 주민번호의 형태와 7번째 자리(성별) 유효성 검사
	fmt = /^\d{6}-[1234]\d{6}$/;
	if(!fmt.test(rrn)){
		return false;
	}

	// 날짜 유효성 검사
	birthYear =(rrn.charAt(7) <= "2") ? "19" : "20";
	birthYear += rrn.substr(0, 2);
	birthMonth = rrn.substr(2, 2) - 1;
	birthDate = rrn.substr(4, 2);
	birth = new Date(birthYear, birthMonth, birthDate);

	if( birth.getYear() % 100 != rrn.substr(0, 2) || birth.getMonth() != birthMonth || birth.getDate() != birthDate){
		return false;
	}

	// Check Sum 코드의 유효성 검사
	buf = new Array(13);
	for(i = 0; i < 6; i++) buf[i] = parseInt(rrn.charAt(i));
	for(i = 6; i < 13; i++) buf[i] = parseInt(rrn.charAt(i + 1));

	multipliers = [2,3,4,5,6,7,8,9,2,3,4,5];
	for(i = 0, sum = 0; i < 12; i++) sum +=(buf[i] *= multipliers[i]);

	if((11 -(sum % 11)) % 10 != buf[12]){
		return false;
	}
	return true;
}

// 사업자등록번호 유효성 체크(Business Registration Number)
function checkBRN(brn){
	var sum = 0;
	var getlist =new Array(10);
	var chkvalue =new Array("1","3","7","1","3","7","1","3","5");
	for(var i=0; i<10; i++){ getlist[i] = brn.substring(i, i+1); }
	for(var i=0; i<9; i++){ sum += getlist[i]*chkvalue[i]; }
	sum = sum + parseInt((getlist[8]*5)/10);
	sidliy = sum % 10;
	sidchk = 0;
	if(sidliy != 0){ sidchk = 10 - sidliy; }
	else { sidchk = 0; }
	if(sidchk != getlist[9]){ return false; }
	return true;
}

// 외국인등록번호 유효성 체크(Foreign Registration Number)
function checkFRN(frn){
	var sum=0;
	var odd=0;
	buf = new Array(13);
	for(i=0; i<13; i++){ buf[i]=parseInt(frn.charAt(i)); }
	odd = buf[7]*10 + buf[8];
	if(odd%2 != 0){ return false; }
	if((buf[11]!=6) && (buf[11]!=7) && (buf[11]!=8) && (buf[11]!=9) ){
		return false;
	}
	multipliers = [2,3,4,5,6,7,8,9,2,3,4,5];
	for(i=0, sum=0; i<12; i++){ sum += (buf[i] *= multipliers[i]); }
	sum = 11 - (sum%11);
	if(sum >= 10){ sum -= 10; }
	sum += 2;
	if(sum >= 10){ sum -= 10; }
	if(sum != buf[12]){ return false }
	return true;
}

// 이메일 유효성 체크
function checkEmail(str){
	var reg = /^((\w|[\-\.])+)@((\w|[\-\.])+)\.([A-Za-z]+)$/;
	if(str.search(reg) != -1){
		return true;
	}
	return false;
}

/* 한글/영문/숫자 입력제한 함수 (지정된 것 제외하고 나머지는 무시)
**************************************************************************************************************/
// 숫자입력제어
function pub_chkKeyPress(chkType){
	// delete control key 와 상하좌우 허용함.
	// Delete = 46, BackSpace=8 , Tab=9 , left-right=37-40 Enter = 13 

	if( ((event.keyCode>=37)&&(event.keyCode<=40))||((event.keyCode>=8)&&(event.keyCode<=9))||(event.keyCode==46) ) {
		return true;
	}
// 숫자만 입력
	if(chkType==1){
		if( ( (event.keyCode>=48)&&(event.keyCode<=57) ) || ( (event.keyCode>=96)&&(event.keyCode<=105) ) ) 
		{
			return true;
		}	
		else
		{
			event.returnValue=false;
			return false;
		} 
	}
// 숫자,, 만 입력
	if(chkType==3){
		if( ( (event.keyCode>=48)&&(event.keyCode<=57) ) || ( (event.keyCode>=96)&&(event.keyCode<=105) ) || ((event.keyCode >= 188)&&(event.keyCode <= 188))) 
		{
			return true;
		}	
		else
		{
			event.returnValue=false;
			return false;
		} 
	}
// 숫자,- 만 입력
	if(chkType==4){
		if( ( (event.keyCode>=48)&&(event.keyCode<=57) ) || ( (event.keyCode>=96)&&(event.keyCode<=105) ) || ((event.keyCode >= 189)&&(event.keyCode <= 189)) || ((event.keyCode >= 109)&&(event.keyCode <= 109))) 
		{
			return true;
		}	
		else
		{
			event.returnValue=false;
			return false;
		} 
	}
}

// 한글만 입력
function chkHan(this_s,type){
	temp_value = this_s.value.toString();
	regexp = '';
	repexp = '';
	switch(type){
		case 'c': regexp = /[^ㄱ-ㅎ가-힣]/g;break;
		case 's': regexp = /[^ㄱ-ㅎ가-힣\s]/g;break;
		case '':	regexp = /[^가-힣]/g; break;
		default : regexp = /[^ㄱ-ㅎ가-힣\s]/g;
	}
	if(regexp.test(temp_value)){
		temp_value = temp_value.replace(regexp,repexp);
		this_s.value = temp_value;
	}
}
/*
type
-> 'c' : 초성 포함
-> 's' : 초성 포함 + 공백 포함
-> '' : 초성, 공백 무시

사용예)
초성, 공백 무시
onkeyup = "chkHan(this, '');"
초성 포함
onkeyup = "chkHan(this, 'c');"
초성, 공백 포함
onkeyup = "chkHan(this, 's');"
*/

// 숫자만 입력받기
function chkNum(this_s,type){
	temp_value = this_s.value.toString();
	regexp = /[^-\.0-9]/g;
	repexp = '';
	temp_value = temp_value.replace(regexp,repexp);
	regexp = '';
	repexp = '';
	switch(type){
		case 'int':	 regexp = /[^0-9]/g; break;
		case 'float':regexp = /^(-?)([0-9]*)(\.?)([^0-9]*)([0-9]*)([^0-9]*)/; break;
		case '-int':	regexp = /^(-?)([0-9]*)([^0-9]*)([0-9]*)([^0-9]*)/;break;
		case '-float':regexp = /^(-?)([0-9]*)(\.?)([^0-9]*)([0-9]*)([^0-9]*)/; break;
		default : regexp = /[^0-9]/g; break;
	}
	switch(type){
		case 'int':repexp = '';break;
		case 'float':repexp = '$2$3$5';break;
		case '-int':	repexp = '$1$2$4';break;
		case '-float':repexp = '$1$2$3$5'; break;
		default : regexp = /[^0-9]/g; break;
	}
	temp_value = temp_value.replace(regexp,repexp);
	this_s.value = temp_value;
}
/*
type
-> '', 'int' : 양의 정수
-> 'float' : 양의 실수
-> '-int' : 음의 정수 포함
-> '-int' : 음의 실수 포함

사용예)
양의 정수만
onkeyup = "chkNum(this, '');"
양의 실수만
onkeyup = "chkNum(this, 'float');"
정수만
onkeyup = "chkNum(this, '-int');"
실수만
onkeyup = "chkNum(this, '-float');"
*/

// 영어만 입력받기  (대소문자)
function chkEng(this_s,type){
	temp_value = this_s.value.toString();
	regexp = '';
	repexp = '';
	switch(type){
		case 'small':regexp = /[^a-z]/g;break;
		case 'big':regexp = /[^A-Z]/g;break;
		case 'all':regexp = /[^a-z]/i;break;
		default :regexp = /[^a-z]/i;break;
	}
	temp_value = temp_value.replace(regexp,repexp);
	this_s.value = temp_value;
}
/*
type
-> '', 'all' : 모두
-> 'small' : 소문자
-> 'big' : 대문자

사용예)
모두
onkeyup = "chkEng(this, '');"
소문자만
onkeyup = "chkEng(this, 'small');"
대문자만
onkeyup = "chkEng(this, 'big');"
*/

// 영어와 숫자만 입력받기
function chkNumEng(this_s){
	temp_value = this_s.value.toString();
	regexp = /[^0-9a-zA-Z]/g;
	repexp = '';
	temp_value = temp_value.replace(regexp,repexp);
	this_s.value = temp_value;
}
/*
사용예)
onkeyup = "chkNumEng(this);"
*/

// 영어와 숫자, 언더바만 입력받기
function chkNumEngUbar(this_s){
	temp_value = this_s.value.toString();
	regexp = /[^0-9a-zA-Z_]/g;
	repexp = '';
	temp_value = temp_value.replace(regexp,repexp);
	this_s.value = temp_value;
}
/*
사용예)
onkeyup = "chkNumEngUbar(this);"
*/

//ID 영문+숫자만 입력체크
function Check_ID(input) {
  var err_cnt=0
  for (var i = 0; i < input.length; i++) {
      var val = input.charAt(i);
      if (!((val >= "0" && val <= "9") || (val >= "a" && val <= "z") || (val >= "A" && val <= "Z"))) err_cnt ++;
  }
  if (err_cnt == 0 ) {
     return true;
  } else {
     return false;
  }
}
function input_email(domain){
	email = document.getElementsByName('email[]')
	if(domain){
		email[1].value = domain;
	}
	else{
		email[1].value = "";
		email[1].focus();
	}
}

function PWD_check(ObjUserPassword){
  // 비밀번호(패스워드) 유효성 체크 (문자, 숫자, 특수문자의 조합으로 6~16자리)
  //if(ObjUserPassword.value != objUserPasswordRe.value)
  //{
  //  alert("입력하신 비밀번호와 비밀번호확인이 일치하지 않습니다");
  //  return false;
  //}
 
//  if(ObjUserPassword.length<6 || ObjUserPassword.length>20) {
//    alert("비밀번호는 영문,숫자,특수문자 조합으로 사용하여 6~20자까지입니다.");
//    return false;
//  }
// 
//  if(!ObjUserPassword.match(/([a-zA-Z0-9].*[!,@,#,$,%,^,&,*,?,_,~])|([!,@,#,$,%,^,&,*,?,_,~].*[a-zA-Z0-9])/)) {
//    alert("비밀번호는 영문,숫자,특수문자 조합으로 사용하여 6~20자까지입니다.");
//    return false;
//  }

  if(ObjUserPassword.length<6 || ObjUserPassword.length>15) {
    alert("비밀번호는 영문,숫자 조합으로 사용하여 6~15자 사이로 입력하세요.");
    return false;
  }
 
  if(!ObjUserPassword.match(/([a-z].*[0-9])|([0-9].*[a-z])/)) {
    alert("비밀번호는 영문,숫자 조합으로 사용하여 6~15자 사이로 입력하세요.");
    return false;
  }
 
  //if(ObjUserID.value.indexOf(ObjUserPassword) > -1) {
  //  alert("비밀번호에 아이디를 사용할 수 없습니다.");
  //  return false;
  //}
 
  var SamePass_0 = 0; //동일문자 카운트
  var SamePass_1 = 0; //연속성(+) 카운드
  var SamePass_2 = 0; //연속성(-) 카운드
 
  for(var i=0; i < ObjUserPassword.length; i++) {
    var chr_pass_0 = ObjUserPassword.charAt(i);
    var chr_pass_1 = ObjUserPassword.charAt(i+1);
    
    //동일문자 카운트
    if(chr_pass_0 == chr_pass_1) {
      SamePass_0 = SamePass_0 + 1
    }
    
    var chr_pass_2 = ObjUserPassword.charAt(i+2);

    //연속성(+) 카운드
    if(chr_pass_0.charCodeAt(0) - chr_pass_1.charCodeAt(0) == 1 && chr_pass_1.charCodeAt(0) - chr_pass_2.charCodeAt(0) == 1) {
      SamePass_1 = SamePass_1 + 1
    }
    
    //연속성(-) 카운드
    if(chr_pass_0.charCodeAt(0) - chr_pass_1.charCodeAt(0) == -1 && chr_pass_1.charCodeAt(0) - chr_pass_2.charCodeAt(0) == -1) {
      SamePass_2 = SamePass_2 + 1
    }
  }
  if(SamePass_0 > 1) {
    alert("동일문자를 3번 이상 사용할 수 없습니다.");
    return false;
  }
 
  if(SamePass_1 > 1 || SamePass_2 > 1 ) {
    alert("연속된 문자열(123 또는 321, abc, cba 등)을\n 3자 이상 사용 할 수 없습니다.");
    return false;
  }
  return true;
}

function comma(v){ 
	var num = v.value;
	if (v.value.length >= 4){
		re = /^$|,/g; 
		num = num.replace(re, ""); 
		fl="" 
		if(isNaN(num)) { alert("문자는 사용할 수 없습니다.");return 0} 
		if(num==0) return num 
		if(num<0){ 
			num=num*(-1) 
			fl="-" 
		}else{
			num=num*1;
		} 
		num = new String(num) 
		temp="" 
		co=3 
		num_len=num.length 
		while (num_len>0){ 
			num_len=num_len-co 
			if(num_len<0){
				co=num_len+co;
				num_len=0;
			} 
			temp=","+num.substr(num_len,co)+temp 
		}
		v.value =  fl+temp.substr(1);
	}
}

function number_format(numstr) {
  var numstr = String(numstr);
  var re0 = /(\d+)(\d{3})($|\..*)/;
  if (re0.test(numstr))
	return numstr.replace(
	  re0,
	  function(str,p1,p2,p3) { return number_format(p1) + "," + p2 + p3; }
	);
  else
	return numstr;
}

/* 기타함수
**************************************************************************************************************/

// 폼에 해당하는 컨트롤들의 기본값 쉽게 셋팅해 주기
function initForm(f){
	var nLen; // form 요소의 갯수
	var ival; // 각 요소의 default value 값 즉! 초기화하고자 하는값
	var fTyp; // form 요소의 타입(select, radio, checkbox...)

	for(var i = 0; i < f.elements.length; i++){
		fTyp = toUpperCase(f.elements[i].type);
		ival = f.elements[i].ival;

		if(ival && fTyp == "SELECT-ONE"){
			nLen = f.elements[i].options.length;
			for(var j = 0; j < nLen; j++){
				if(f.elements[i].options[j].value == ival)
					f.elements[i].options[j].selected = true;
			}
		}
		if(fTyp == "SELECT-MULTIPLE"){
			nLen = f.elements[i].options.length;
			for(var j = 0; j < nLen; j++){
				if(f.elements[i].options[j].value == f.elements[i].options[j].ival)
					f.elements[i].options[j].selected = true;
			}
		}
		if(ival &&(fTyp == "RADIO" || fTyp == "CHECKBOX")){
			if(f.elements[i].value == ival)
				f.elements[i].checked = true;
		}
	}
	return true;
}

// 문자 길이 반환(영문 1byte, 한글 2byte 계산)
function getLen(str){
	var strLen = str.length;
	var cnt = 0;

	for(k=0; k<strLen; k++){
		var temp = str.charAt(k);
		if(escape(temp).length > 4)
			cnt += 2;
		else if(temp != '\r')
			cnt++;
	}
	return cnt;
}

// 바이트로 입력제한(초과분 자동삭제)
function cutByte(f, maxByte){
	var str = new String(f.value);
	var strLen = str.length;
	var strByte = getLen(str);
	var cnt = 0;

	if(strByte > maxByte){
		var overByte = strByte-maxByte;
		alert("내용을 "+maxByte+"byte 이상 입력하실 수 없습니다.\n입력하신 내용 중 초과 "+overByte+"byte는 자동 삭제 됩니다.");
	}

	for(k=0; k<strLen; k++){
		if(cnt < maxByte){
			var temp = str.charAt(k);
			if(escape(temp).length > 4)
				cnt += 2;
			else if(temp != '\r')
				cnt++;
		}else{
			str = str.substring(0, k);
			if((maxByte%2) == 1){
				strLen = str.length-1;
				if(escape(str.charAt(strLen)).length > 4){
					str = str.substring(0,strLen);
				}
			}
			f.value = str;
			break;
		}
	}
}

// 대문자 변환 ex) toUpperCase(문자)
function toUpperCase(str){
	var ret;
	str != null ? ret = str.toUpperCase() : ret = "";
	return ret;
}

// 포커스 변경
function moveFocus(num,fromform,toform){
	var str = fromform.value.length;
	if(str == num) toform.focus();
}

// 이메일선택입력
function inputDomain(f, domain){
	if(domain){
		f.email2.value = domain;
	}else{
		f.email2.value = "";
		f.email2.focus();
	}
}

// 파일폼 직접입력 제한
function filePretect(){
	alert("찾아보기를 이용해 주세요.");
	event.returnValue = false;
}

//체크박스 전체선택
function AllChk() {

	if($("#chk").prop("checked") == true) {

		for(var i = 0; i < document.ListForm.elements.length; i++) {
			document.ListForm.elements[i].checked = true;
		}
	}else {
		for(var i = 0; i < document.ListForm.elements.length; i++) {
				document.ListForm.elements[i].checked = false;
		}
	}
}

//체크박스 전체선택
function AllChk_sub() {
	if($("#chk2").prop("checked") == true) {
		for(var i = 0; i < document.ListForm2.elements.length; i++) {
			document.ListForm2.elements[i].checked = true;
		}
	}else {
		for(var i = 0; i < document.ListForm2.elements.length; i++) {
				document.ListForm2.elements[i].checked = false;
		}
	}
}

//체크박스 전체선택
function AllChk_sub2() {
	if($("#chk3").prop("checked") == true) {
		for(var i = 0; i < document.ListForm3.elements.length; i++) {
			document.ListForm3.elements[i].checked = true;
		}
	}else {
		for(var i = 0; i < document.ListForm3.elements.length; i++) {
				document.ListForm3.elements[i].checked = false;
		}
	}
}

/* 지정된 체크박스 모두 체크
**************************************************************************************************************/
function AllChk2(frm, type){
	var chk_obj = document.getElementsByName(type);
	if(frm.allchk.checked == true){
		for(var i=0; i<chk_obj.length; i++){
			chk_obj[i].checked = true;
		}
	}else{
		for(var i=0; i<chk_obj.length; i++){
			chk_obj[i].checked = false;
		}
	}
}

//날짜 스크립트
function wr_date(s_u, e_u, per){
	var st_date = document.getElementsByName(s_u);
	var en_date = document.getElementsByName(e_u);
	var newDay=mydate=new Date();
	var year=mydate.getYear()
	var month=mydate.getMonth()+1
	var day=mydate.getDate()

	if (month<10) month="0"+month;
	if (day<10) day="0"+day;


	newDay.setDate(mydate.getDate()-per); 
	var se_year=newDay.getYear()
	var se_month=newDay.getMonth()+1
	var se_day=newDay.getDate()

	if (se_month<10) se_month="0"+se_month;
	if (se_day<10) se_day="0"+se_day;

	st_date[0].value=se_year+"-"+se_month+"-"+se_day;
	en_date[0].value=year+"-"+month+"-"+day;
}

function clr_txt(na){
	var cl_name = document.getElementsByName(na);
	cl_name[0].value="";
}

// 현재 이벤트객체 Index 가져오기 ##################################################
function getDisObjIdx(obj) {
	var i = 0;
	var result = 0;

	var arrTag = document.getElementsByTagName('*');

	if (obj.sourceIndex) {
		while (arrTag[i].sourceIndex < obj.sourceIndex) {
			if (arrTag[i].id == obj.id) ++result;
			++i;
		}
	}
	else if (obj.compareDocumentPosition) {
		while ((arrTag[i].compareDocumentPosition(obj) & 6) - 3 > 0) {
			if (arrTag[i].id == obj.id) ++result;
			++i;
		}
	}

	return result;
}

/* 숫자세자리마다 콤마 찍기
**************************************************************************************************************/
function commify(n) {
	var reg = /(^[+-]?\d+)(\d{3})/;		// 정규식
	n += '';							// 숫자를 문자열로 변환

	while (reg.test(n))
		n = n.replace(reg, '$1'+','+'$2');

	return n;
}

/* 삭제 함수
**************************************************************************************************************/
function do_delete(url, txt){
	var c = confirm(txt);
	if (c){
		doquery.location.href=url;
	}
}

function change_bg(num){
	var num = parseInt(num);
	$('#list_tr tr').slice(0).removeClass("tbrow_sel");
	$('#list_tr tr').slice(0).addClass("tbrow");

	$('#list_tr tr').slice(num, num+1).removeClass("tbrow");
	$('#list_tr tr').slice(num, num+1).addClass("tbrow_sel");
}

function change_bg_sub(num){
	var num = parseInt(num);
	$('#list_tr_sub tr').slice(0).removeClass("tbrow_sel");
	$('#list_tr_sub tr').slice(0).addClass("tbrow");

	$('#list_tr_sub tr').slice(num, num+1).removeClass("tbrow");
	$('#list_tr_sub tr').slice(num, num+1).addClass("tbrow_sel");
}

function change_bg3(num){
	var num = parseInt(num);
	$('#list_tr3 tr').slice(0).removeClass("tbrow_sel");
	$('#list_tr3 tr').slice(0).addClass("tbrow");

	$('#list_tr3 tr').slice(num, num+1).removeClass("tbrow");
	$('#list_tr3 tr').slice(num, num+1).addClass("tbrow_sel");
}

function change_sel(num){
	var num = parseInt(num);
	var cls_name = $('#list_tr tr:eq('+num+')').attr("class");
	if (cls_name=="tbrow"){
		$('#list_tr tr:eq('+num+')').attr("class", "tbrow_selC");
		$('#list_tr .Tno_border:eq('+num+')').attr("checked", true);
	}else{
		$('#list_tr tr:eq('+num+')').attr("class", "tbrow");
		$('#list_tr .Tno_border:eq('+num+')').attr("checked", false);
	}

}

function Tb_addRow(Tid, Trow){
	$("#"+Tid).append($("#"+Trow).val());
}

function Tb_delRow(obj){
	$(obj).parent().parent().remove();
}

function goTwitter(msg,url) {
	var href = "http://twitter.com/home?status=" + encodeURIComponent(msg) + " " + encodeURIComponent(url);
	var a = window.open(href, 'twitter', '');
	if ( a ) {
		a.focus();
	}
}
function goMe2Day(msg,url,tag) {
	var href = "http://me2day.net/posts/new?new_post[body]=" + encodeURIComponent(msg) + " " + encodeURIComponent(url) + "&new_post[tags]=" + encodeURIComponent(tag);
	var a = window.open(href, 'me2Day', '');
	if ( a ) {
		a.focus();
	}
}
function goFaceBook(msg,url) {
	var href = "http://www.facebook.com/sharer.php?u=" + url + "&t=" + encodeURIComponent(msg);
	var a = window.open(href, 'facebook', '');
	if ( a ) {
		a.focus();
	}
}
function goCyWorld(msg, url) {
	var link = "http://csp.cyworld.com/bi/bi_recommend_pop.php?title="+encodeURIComponent(msg);
	link += "&url="+encodeURIComponent(url);
	link += "&thumbnail="+encodeURIComponent("{sc_img[0]}");
	link += "&summary="+encodeURIComponent("");
	window.open(link,"sns",'width=700,height=600,resizable=yes,scrollbars=yes,status=0');

}
/*
function goYozmDaum(prefix,link,parameter) {
	var href = "http://yozm.daum.net/api/popup/prePost?link=" + encodeURIComponent(link) + "&prefix=" + encodeURIComponent(prefix) + "&parameter=" + encodeURIComponent(parameter);
	var a = window.open(href, 'yozmSend', 'width=466, height=356');
	if ( a ) {
		a.focus();
	}
	//sourceid=54&
}
*/
function goYozmDaum(msg,url) {
	var href = "http://yozm.daum.net/api/popup/post?prefix=" + encodeURIComponent(msg) + "&meta=&key=&imgurl=&crossdomain=0&callback=&link=" + encodeURIComponent(url);
	var a = window.open(href, 'yozmSend', 'width=466, height=356');
	if ( a ) {
		a.focus();
	}
	//sourceid=54&
}

function pop_calendar(form, field){
	window.open("/dev/pop_calendar.php?form="+form+"&field="+field, "calendar", "width=184,height=158");
}

function goSubmitBasic(f) {
	// 폼 검증 함수 실행
	if(!checkForm(f)){
		return false;
	}
}

function Mcash_list(u){
	window.open("../pop/pop_cash.php?uid="+u, "CASH_LIST", "width=880px, height=600px, scrollbars=yes");
}

function Mpoint_list(u){
	window.open("../pop/pop_point.php?uid="+u, "POINT_LIST", "width=880px, height=600px, scrollbars=yes");
}

function shipping_pop_view(u){
	window.open("../../mypage/pop_shipping_order.php?snum="+u, "SHIPPING_ORDERS", "width=820,height=900, scrollbars=yes");
}

function shipping_pop_v(u){
	window.open("../../mypage/pop_shipping_orderV.php?unum="+u, "SHIPPING_ORDERSV", "width=830,height=900, scrollbars=yes");
}

function shipping_return_app(u){
	window.open("../pop/pop_shipping_return.php?unum="+u, "SHIPPING_RETURNApp", "width=830,height=650, scrollbars=yes");
}

function sendSns(sns, url, txt)
{
    var o;
    var _url = encodeURIComponent(url);
    var _txt = encodeURIComponent(txt);
    var _br  = encodeURIComponent('\r\n');
 
    switch(sns)
    {
        case 'facebook':
            o = {
                method:'popup',
                url:'http://www.facebook.com/sharer/sharer.php?u=' + _url
            };
            break;
 
        case 'twitter':
            o = {
                method:'popup',
                url:'http://twitter.com/intent/tweet?text=' + _txt + '&url=' + _url
            };
            break;
 
        case 'me2day':
            o = {
                method:'popup',
                url:'http://me2day.net/posts/new?new_post[body]=' + _txt + _br + _url + '&new_post[tags]=epiloum'
            };
            break;
 
        case 'kakaotalk':
            o = {
                method:'web2app',
                param:'sendurl?msg=' + _txt + '&url=' + _url + '&type=link&apiver=2.0.1&appver=2.0&appid=dev.epiloum.net&appname=' + encodeURIComponent('Epiloum 개발노트'),
                a_store:'itms-apps://itunes.apple.com/app/id362057947?mt=8',
                g_store:'market://details?id=com.kakao.talk',
                a_proto:'kakaolink://',
                g_proto:'scheme=kakaolink;package=com.kakao.talk'
            };
            break;
 
        case 'kakaostory':
            o = {
                method:'web2app',
                param:'posting?post=' + _txt + _br + _url + '&apiver=1.0&appver=2.0&appid=dev.epiloum.net&appname=' + encodeURIComponent('Epiloum 개발노트'),
                a_store:'itms-apps://itunes.apple.com/app/id486244601?mt=8',
                g_store:'market://details?id=com.kakao.story',
                a_proto:'storylink://',
                g_proto:'scheme=kakaolink;package=com.kakao.story'
            };
            break;
 
        case 'band':
            o = {
                method:'web2app',
                param:'create/post?text=' + _txt + _br + _url,
                a_store:'itms-apps://itunes.apple.com/app/id542613198?mt=8',
                g_store:'market://details?id=com.nhn.android.band',
                a_proto:'bandapp://',
                g_proto:'scheme=bandapp;package=com.nhn.android.band'
            };
            break;
 
        default:
            alert('지원하지 않는 SNS입니다.');
            return false;
    }
 
    switch(o.method)
    {
        case 'popup':
            window.open(o.url);
            break;
 
        case 'web2app':
            if(navigator.userAgent.match(/android/i))
            {
                // Android
                setTimeout(function(){ location.href = 'intent://' + o.param + '#Intent;' + o.g_proto + ';end'}, 100);
            }
            else if(navigator.userAgent.match(/(iphone)|(ipod)|(ipad)/i))
            {
                // Apple
                setTimeout(function(){ location.href = o.a_store; }, 200);          
                setTimeout(function(){ location.href = o.a_proto + o.param }, 100);
            }
            else
            {
                alert('이 기능은 모바일에서만 사용할 수 있습니다.');
            }
            break;
    }
}

function show_info(obj){
	$("#"+obj).removeClass("dn");
}

function hide_info(obj){
	$("#"+obj).addClass("dn");
	$("#"+obj).val("");
}

function show_hide_info(obj, id){
	if($("#"+obj).is(":checked")==true){
		$("#"+id).removeClass("dn");
	}else{
		$("#"+id).addClass("dn");
		$("#"+id).val("");
	}
}

function show_info_date(obj){
	$("#"+obj+"sp").removeClass("dn");

	$( "#"+obj).datepicker({
		dateFormat: "yy-mm-dd"
	});
}

var Basicunit = 33;
function UnitConversionA(){
	var v = Number($("#bn_area").val());
	var result = Math.round(parseInt((v * 1000 / Basicunit) * 100)/10000);
	if (isNaN(result)){
		alert("숫자만 입력해주시기 바랍니다.");
		return;
	}else{
		$("#bn_areak").val(result);
	}
}

function UnitConversionB(){
	var v = Number($("#bn_areak").val());
	var result = Math.round(v * Basicunit) / 10;
	if (isNaN(result)){
		alert("숫자만 입력해주시기 바랍니다.");
		return;
	}else{
		$("#bn_area").val(result);
	}
}

function UnitConversionC(){
	var v = Number($("#bn_area2").val());
	var result = Math.round(parseInt((v * 1000 / Basicunit) * 100)/10000);
	if (isNaN(result)){
		alert("숫자만 입력해주시기 바랍니다.");
		return;
	}else{
		$("#bn_areak2").val(result);
	}
}

function UnitConversionD(){
	var v = Number($("#bn_areak2").val());
	var result = Math.round(v * Basicunit) / 10;
	if (isNaN(result)){
		alert("숫자만 입력해주시기 바랍니다.");
		return;
	}else{
		$("#bn_area2").val(result);
	}
}