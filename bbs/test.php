



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/test.css">
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
    <script type="text/javascript" src="../js/jquery-3.6.0.slim.min.js"></script>
    <script type="text/javascript" src="../js/test.js"></script>
</head>
<body>
<div class="s-content">
    <div class="s-test-wrap">
        <!-- 1. 표지 -->
        <section id="s-page-title">
            <article class="s-art s-art-01 s-bg-blue">
                <h1 class="s-title-01">하늘인재 성향테스트</h1>
                <h2 class="s-subtitle-01">나랑 잘 맞는 24개부서는 어디일까?</h2>
                <button id="s_startBtn" class="s-startBtn s-btn s-btn-start"> 시작해볼까요? &gt; </button>
                <button id="resultBtn" class="s-btn"> result ? &gt; </button>

                <div class="s-img-wrap">
                    <img class="s-person" src="../css/images/test/person.png" alt="하늘 인재 성향테스트를 하는 성도의 모습">
                </div>
                <div id="s-img-pink">
                    <img class="s-img" src="../css/images/test/pink.png" alt="문화부 인재 이미지">
                </div>
                <div id="s-img-green">
                    <img class="s-img" src="../css/images/test/green.png" alt="재정부 인재 이미지">
                </div>
                <div id="s-img-yellow">
                    <img class="s-img" src="../css/images/test/yellow.png" alt="교육부 인재 이미지">
                </div>
            </article>
        </section>

        <!-- 2. 하늘인재 적성검사 Step1 표면적인 나 -->
        <section id="s-page-outer">
            <!-- art02 -->
            <article class="s-art s-art-02 s-bg-blue">
                <h3 class="s-text-step">STEP 1</h3>
                <h1 class="s-title-02">표면적인 나</h1>
                <h5 class="s-subtitle-02">기본정보/ 전공/ 직종/ 자격증/ 소망분야 </h5>
                <button class="s-goBtn s-btn s-btn-go"> 다음으로 GO! &gt; </button>
            </article>
            <!-- art03 -->
            <article class="s-art s-art-03 s-bg-yellow">
                <header class="s-top">
                    <p>
                        <span id="s-step-outer" class="s-step s-text-step-02">01</span> 
                        <span class="s-text-step-03">/05</span>
                    </p>  
                    <img class="s-img s-img-title" src="../css/images/test/title.png" alt="하늘인재성향테스트">
                    <img class="s-img" src="../css/images/test/subtitle.png" alt="Step1 표면적인 나">
                </header>
                <!--  1. 당신은 누구인가요? -->
                <div class="s-wrap s-wrap-01 active" data-wrap="1">
                    <div class="s-img-wrap">
                        <img src="../css/images/test/people.png" alt="사람들">
                    </div>
                    <div class="s-text-wrap">
                        <p class="s-text-q">당신은 누구인가요?</p>
                        <div class="row s-input-wrap">
                            <div class="col-xs-6 col-sm-6">
                                <div class="s-input">
                                    <label for="user_church">교회</label>
                                    <input id="user_church" type="text">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <div class="s-input">
                                    <label for="user_group">지역</label>
                                    <input id="user_group" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row s-input-wrap">
                            <div class="col-xs-6 col-sm-6">
                                <div class="s-input">
                                    <label for="user_subgroup">구역</label>
                                    <input id="user_subgroup" type="text">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <div class="s-input">
                                    <label for="user_name">이름</label>
                                    <input id="user_name" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 2. 당신의 전공은 무엇인가요? -->
                <div class="s-wrap s-wrap-02" data-wrap="2">
                    <div class="s-text-wrap">
                        <h1 class="s-text-q text-center">당신의 전공은 무엇인가요?</h1>
                    </div>
                    
                    <div class="s-button-group-wrap">
                        <?php
                            $department = array('종교학과', '외국어관련학과', '컴퓨터공학과', '약학대학', '로스쿨', '사회학과', '사회과학대학', '디자인관련학과', '음악대학',
                                                '심리학과', '간호대학', '미술대학', '연극영화과', '국문학과', '경영대학', '교육대학', '의과대학',
                                                '문헌정보학과', '건축학과', '의류학과', '체육대학', '기타');
                            $dindex = 0;
                            foreach ($department as $d) {
                                echo '<div class="s-button-wrap"><button class="s-btn-major" onclick="activeMajorBtn(this)" data-major='.$dindex.'>' . $d . ' </button> </div>';
                                $dindex++;
                            }
                        ?>

                    </div>
                </div>

                <!-- 3. 당신은 어떤 직종에서 일하고 있나요? -->
                <div class="s-wrap s-wrap-03" data-wrap="3">
                    <div class="s-text-wrap text-center">
                        <h1 class="s-text-q">당신은 어떤 직종에서 일하고 있나요?</h1>
                        <h2 class="s-text-sq">(과거에 일했던 직종도 가능합니다.)</h2>
                    </div>
                    
                    <div class="s-button-group-wrap">
                        <?php
                            $major = array('경영, 관리, 사무, 마케팅', '언론, 홍보, 방송', '번역, 외국어 강사', '건설, 설계, 토목', '회계 관련직', '경찰, 경호, 소방, 교정직', 
                                                '영업, 판매직', '기계, 전자, 정보통신', '금융, 보험관련직',
                                                '사회복지 관련직', '성악, 연주', '군인', '교육직', '출판, 자료편집', '운전 및 운송 관련', '미용, 섬유, 의복, 공예', '법률 관련직',
                                                '문화, 예술, 공연', '오락, 스포츠 관련', '환경 관련 직업', '보건, 의료 관련직', '종교 관련직', '서비스 관련직', '기타');
                            $mindex = 0;
                            foreach ($major as $m) {
                                echo '<div class="s-button-wrap"><button class="s-btn-job" onclick="activeJobBtn(this)" data-job='.$mindex.'>'. $m . '</button></div>';
                                $mindex++;
                            }
                        ?>
                    </div>
                </div>

                 <!-- 4. 당신은 어떤 자격증을 갖고 있나요? -->
                 <div class="s-wrap s-wrap-04" data-wrap="4">
                    <div class="s-text-wrap text-center">
                        <h1 class="s-text-q">당신은 어떤 자격증을 갖고 있나요?</h1>
                        <h2 class="s-text-sq">(과거에 갖고있던 자격증도 포함입니다.)</h2>
                    </div>
                    
                    <div class="s-button-group-wrap">
                        <?php
                            $license = array('건설 관련 자격증', '컴퓨터, 앱 개발 관련', '워드, 엑셀', '주산, 부기, 회계 관련', '법률 관련', '사회복지사, 의료', '음악심리 치료사',
                                            '통번역, 외국어 관련', '한국어능력시험', '방송 관련(촬영, 편집)', '스포츠 지도사', '해당 없음');
                            $lindex = 0;
                            foreach ($license as $l) {
                                echo '<div class="s-button-wrap"><button class="s-btn-license" onclick="activeLicenseBtn(this)" data-license='.$lindex.'>'. $l . '</button></div>';
                                $lindex++;
                            }
                        ?>
                    </div>
                </div>

                <!-- 5. 당신은 하나님 나라에서 어떤 분야에 소망이 있나요? -->
                <div class="s-wrap s-wrap-05" data-wrap="5">
                    <div class="s-text-wrap text-center">
                        <h1 class="s-text-q">당신은 하나님 나라에서 <br> 어떤 분야에 소망이 있나요?</h1>
                    </div>
                    <div class="s-checkbox-group-wrap">
                        <?php
                            $field = array('하나님의 성전관리, 발전', '이용시설을 보다 더 빛나게 창조', '복음 전하는 축복의 통로',
                                            '하나님 나라를 발전시키는 전도의 사명', '교회와 성도를 지키고 보호', '거짓교리를 올바른 교리로 반증하는 것', 
                                            '전성도가 인맞을 수 있도록 교육하는 것 ', '하나님의 재정을 투명하게 관리하는 것 ', '하늘법과 세상법으로 신천지 성도를 영육으로 보호',
                                            '협력하며 타인을 위해 봉사하는 것', '음악적 재능(작곡, 노래, 악기 등)을 하나님께 쓰이는 것', '통계, 데이터 분석을 통한 현실 파악', 
                                            '문화예술 활동으로 하나님 나라를 빛내는 것', '행사를 기획하는 것', '상담을 통해 성도의 마음을 보호하는 것', 
                                            '하늘의 나팔로서 취재하고 홍보하는 것', '외부 인사들은 관리하고 섭외하는 것', '스포츠를 통한 하나님 나라 발전',
                                            '교회과 성도님들을 위한 창조적인 기획하는 것');
                            
                            $findex = 0;
                            foreach ($field as $f) {
                                echo '<div class="s-checkbox-wrap" onclick="activeField(this)" >
                                            <div class="s-checkbox s-checkbox-field" data-field='.$findex.'></div>
                                            <span class="s-text-a">' . $f . '</span>
                                        </div>';
                                $findex++;
                            }
                        ?>
                    </div>
                </div>

                <footer class="s-bottom">
                    <!-- <button class="s-prevBtn s-button-02"> &lt; PREV </button> -->
                    <p>
                        <span id="s-step-outer" class="s-step s-text-step-02">01</span> 
                        <span class="s-text-step-03">/05</span>
                    </p>
                    <button class="s-nextBtn s-btn-next" disabled> NEXT &gt; </button>
                </footer>
            </article>
            
        </section>

        <!-- 3. 하늘인재 적성검사 Step2 내면적인 나 -->
        <section id="s-page-inner">
            <!-- art08 -->
            <article class="s-art s-art-08 s-bg-blue">
                <h2 class="s-text-step">STEP 2</h3>
                <h1 class="s-title-02">내면적인 나</h1>
                <h3 class="s-subtitle-02">50개 문항 / 본격적으로 알아보기! </h5>
                <button class="s-goBtn s-btn s-btn-go"> 다음으로 GO &gt; </button>
            </article>
            <!-- art09 01/12 -->
            <article class="s-art s-art-09 s-bg-yellow">
                <?php
                    $tendency = array(
                        '나는 모임에서 중재의 역할을 한다.', '나는 평소에 색다른 생각을 하곤 한다.', '나는 새롭게 도전하는 것을 좋아한다.','나는 꼼꼼한 편이다','나는 숫자와 친한 사람이다.',
                        '나는 일을 능동적으로 계획하고 실행하는 편이다. ','나는 지식을 채우는 독서와 웹서핑을 즐긴다. ','나는 주변사람들로부터 말을 잘한다고 듣는 편이다.','나는 헌신적이다.',
                        '나는 가르치는 일에 소질이 있다. ', '나는 타인을 설득하고 마음을 사는데 능력이 있다. ', '나는 외국 문화에 관심이 많다.', '나는 모든 사람은 친구가 될 수 있다고 생각한다.',
                        '나는 사람의 마음을 감동시키는 힘이 있다. ', '나는 근면하며 책임감이 강하다. ', '나는 예술가적인 기질이 있다.', '나는 여러 컨텐츠에 관심이 많다. ',
                        '나는 상상력이 풍부하다. ', '나는 독서를 즐긴다', '나는 말로 사람을 설득하는 능력이있다.', '나는 조직에서 따르는 것보다 이끄는 편이다.',
                        '나는 사람들과 잘 어울리는 것을 좋아한다. ', '나는 글을 쓰는 것을 좋아한다. ', '나는 미디어에 관심이 많다. ', '나는 이미지 메이킹을 잘한다. ',
                        '나는 논리적으로 생각하고 정리한다.', '나는 사람의 이야기를 들어주는 것을 좋아한다.', '나는 주위를 꾸미고 개선하는 것에 관심이 있다.', '나는 정적인 것보다 움직이는 것을 추구한다',
                        '나는 안전보다는 도전을 추구한다.', '나는 비즈니스에 밝다. ', '나는 타인에게 관심을 두며 돌본다.', '나는 밝고 유쾌하게 분위기를 만든다.',
                        '나는 정리정돈을 잘한다.', '나는 사회적 약자에 관심이 많다.');
                    
                    $arrLen = count($tendency); 
                                          
                    $r = $arrLen % 3;
                    $q = ($arrLen-$r) / 3;
                    $cnt = ($r > 0) ? ($q + 1) : ($arrLen / 3);
                ?>
                <header class="s-top">
                    <p>
                        <span class="s-step s-text-step-02">01</span> 
                        <?php
                            echo '<span class="s-text-step-03">/'.$cnt.'</span>'
                        ?>
                    </p>                    
                    <img class="s-img s-img-title" src="../css/images/test/title.png" alt="하늘인재성향테스트">
                    <img class="s-img" src="../css/images/test/subtitle_02.png" alt="Step2 내면적인 나">
                </header>
                <?php
                    for($i=0; $i<$cnt; $i++) {

                        $wrapClassName = (strlen($i+1) == 1 ? 's-wrap-0'.($i+1) : 's-wrap-'.($i+1));
                            
                        if (($i+1) == 1) {
                            $wrapClassName = $wrapClassName.' active';
                        }
                        echo '<div class="s-wrap '.$wrapClassName.'" data-wrap="'.($i+1).'">';
                        
                        for($j=0; $j<3; $j++) {
                            if ($arrLen > (3*$i+$j)) {
                                echo '<div class="s-qa-wrap" data-tendency='.(3*$i+$j).'>
                                        <p class="s-text-q-02">' . (3*$i+($j+1)) .'.'.$tendency[3*$i+$j]. '</p>
                                        <div class="s-button-wrap">
                                            <button class="s-btn-yes" onclick="activeBtn(this,'.($i == $cnt-1 ? true : false).')">그렇다</button>
                                        </div>
                                        <div class="s-button-wrap">
                                            <button class="s-btn-no" onclick="activeBtn(this,'.($i == $cnt-1 ? true : false).')">아니다</button>
                                        </div>
                                    </div>';
                            }
                        }

                        echo '</div>';
                    }
                ?>
                <footer class="s-bottom">
                    <!-- <button class="s-prevBtn s-button-02"> &lt; PREV </button> -->
                    <p>
                        <span id="s-step-inner" class="s-step s-text-step-02">01</span> 
                        <?php
                            echo '<span class="s-text-step-03">/'.$cnt.'</span>'
                        ?>
                    </p>
                    <button class="s-nextBtn s-btn-next"> NEXT &gt; </button>
                </footer>
            </article>
        </section>

        <!-- 4. 하늘인재 적성검사 결과 -->
        <section id="s-page-result">

            <article class="s-art s-art-10 s-bg-blue">
                <header>
                    <h1 class="s-title-03">결과가 나왔어요!</h1>
                    <h2 class="s-subtitle-03">당신과 잘 어울리는 부서 TOP 3</h3>
                </header> 

                <?php 
                    class Part {
                        private $_score = 0;
                        public $code, $name, $description;

                        #생성자
                        function __construct($code, $name, $description)
                        {
                            $this->code = $code;
                            $this->name = $name;
                            $this->description = $description;
                        }

                        public function getCode() {
                            return $this->code;
                        }

                        public function getName() {
                            return $this->name;
                        }

                        public function getDescription() {
                            return $this->description;
                        }

                        public function getScore() {
                            return $this->_score;
                        }

                        public function addScore($score) {
                            $this->_score += $score;
                        }
                    }

                    $nae = new Part('nae', '내무부', 
                    '당신은 사람의 심리에 대해 관심이 많은 편이네요!
                    관찰력도 있고 정도 많은 사람이에요. 
                    사랑이 많은 당신에게는 내무부가 잘 어울려요! 
                    내무부에서는 세심하게 성도들을 사랑으로 보호하고 발전시켜나갈 인재가 필요해요. 
                    함께 모든 성도들이 기본부터 갖춰나갈 수 있도록 일해보는건 어떨까요? ');

                    $ki = new Part('ki', '기획부', 
                    '색다른 생각을 하고 상상력이 풍부한 당신! 
                    그렇다고 몽상가 같은 사람은 아니에요! 
                    당신은 무언가를 기획하기를 좋아하고 새로운 일에 도전하는 것을 좋아하는 사람이네요. 
                    기획부에서는 모든 부서를 연계하고 지파를 더욱 더 발전시키 위해 더 많이 고민을 하는 당신과 같은 인재가 필요해요! 
                    보다 더 낫게, 새롭게 발전시킬 기획부에 함께해보는 것은 어떨까요? ');

                    $jae = new Part('jae', '재정부', 
                    '꼼꼼하고 책임감 강한 당신!
                    재정부에 가장 잘 어울리네요. 
                    당신은 책임감이 강하여 하나님의 나라의 재산을 잘 지켜낼 수 있는 사람이에요.
                    재정부는 24부서 중 가장 투명하고 건전하게 운영이 되어야하는 부서에요. 
                    당신은 꼼꼼하고 세심해서 재정관련 일도 거뜬히 해낼 수 있을거에요. 
                    지금 도전해보지 않을래요? ');

                    $kyo = new Part('kyo', '교육부', 
                    '논리정연하고 남들로부터 말을 잘한다는 말을 자주 듣는 당신!
                    계획한대로 실행하는 데에도 일가견이 있네요. 
                    남들에게 설명을 잘해서 사람들도 잘 가르칠 수 있는 당신은 교육부에 가장 잘 어울려요. 
                    나를 포함해서 모든 성도들이 말씀체가 된 하나님의 나라를 꿈꾸지 않으세요? 
                    교육부에서는 성도들이 전부 인 맞을 수 있도록 함께 관리해줄 당신과 같은 인재가 필요해요. 
                    함께 걸어다니는 성경책이 되어보는 것은 어떨까요? ');

                    $sin = new Part('sin', '신학부', 
                    '따뜻하고 넓은 마음을 가진 당신!
                    하나님의 말씀을 전하고, 수강생을 품어주는 신학부와 잘 어울리네요!
                    당신은 희생하고 양보하는 마음이 내재된 따뜻한 사람이에요.
                    수강생들을 하나님의 말씀으로 인도하고 부모의 마음으로 양육시키는 
                    당신과 같은 인재가 필요해요! 
                    우리 하나님의 열매를 같이 양육 해보는건 어떨까요? ');

                    $hae = new Part('hae', '해외선교부', 
                    '자유롭고 아름다운 마음을 가진 당신!
                    다양한 사고방식도 존중할 줄 아는 당신은 해외선교부에 잘 어울리네요.
                    남들이 갖지 못한 넓은 마인드와 언어 실력도 갖고 있어요. 
                    해외선교부에서는 옛 선지사도들 처럼 하나님의 말씀을 해외에도 전달할 수 있는 당신과 같은 인재가 필요해요! 
                    진정한 만국소성 해외선교부와 함께 해보는 것은 어떨까요? ');

                    $jeon = new Part('jeon', '전도부', 
                    '진취적이고 새로운 도전을 좋아하는 당신.
                    하지만 당신은 목표지향적이기만 하고 냉담한 그런 사람은 아니네요. 
                    사람의 마음을 움직이는 힘을 갖고 있는 당신은 전도부가 가장 잘 어울려요! 
                    전도를 왜 해야하는지 이유를 알고 행동하는 당신은 전도부에 필요한 인재에요! 
                    그 어느때보다 시몬지파의 전도가 중요한 지금, 
                    전도부에서 함께 복음을 전하는 축복의 통로가 되어보는건 어떨까요?');

                    $mun = new Part('mun', '문화부', 
                    '독창적이고 자신만의 색깔을 갖고 있는 당신. 
                    색다른 생각을 자주 해서 특이하다는 소리도 가끔 듣곤 하지만 
                    누구보다도 자신만의 길을 개척하고 주도하는 중이네요. 
                    당신의 재능과 적성을 살려서 하늘 문화를 더욱 발전시켜보고 싶지 않으세요?
                    문화부에서는 많은 사람들에게 진정한 하늘 문화를 알려줄 당신과 같은 인재를 찾고있어요! 
                    여러가지 컨텐츠로 하나님 나라를 더 같이 빛내지 않을래요? ');

                    $chul = new Part('chul', '출판부', 
                    '정리정돈을 잘하고 꼼꼼한 편인 당신!
                    남들에게 보이지 않는 부분도 잘 캐치해요. 
                    맞춤법 전문가인 당신은 무언가를 읽을 때면 나도 모르게 살펴보게 되고 고쳐주고 싶단 생각이 들수도 있겠군요. 
                    주변으로부터 어휘력이 좋다는 얘기를 듣는 당신은 출판부에 가장 잘 어울려요!
                    신천지에서는 성도들이 쉽게 인맞을 수 있도록 다양한 출판물이 있죠. 
                    많은 사람들이 생명의 말씀에 더 가까이 할 수 있도록 출판부에서 함께 일해본건 어떨까요?');

                    $jeong = new Part('jeong', '정보통신부', 
                    '핵!인!싸! 발 빠른 정보를 가지고 있는 당신!
                    어느 정도 컴퓨터도 잘 다루는 능력을 가지고 있는 당신은 정보통신부에 잘 어울려요!
                    언택트 시대에 인터넷과 정보기술로 하나님께 영광을 올려드리는 유일한 부서에요!
                    하나님의 나라의 재산과 정보를 지키고, 인터넷 전쟁에서도 함께 승리해볼까요? ');

                    $chan = new Part('chan', '찬양부', 
                    '음악에 재능이 있고, 분위기 메이커인 당신! 
                    특히 하나님께 찬양으로써 영광을 올리기를 좋아하는 군요. 
                    그런 당신에게는 찬양부가 가장 잘 어울려요! 
                    새 시대에 맞게 새찬양으로 하나님께 영광을 올려드리면 좋겠죠? 
                    꼭 전공자가 아니더라도 음악적 재능으로 하나님께 영광을 올려드릴 마음이 있다면 당신은 찬양부에서 찾는 인재랍니다. 
                    음악으로 세상을 소성하는 음악 제사장이 되어 보는건 어떨까요?');

                    $sub = new Part('sub', '섭외부', 
                    '불의를 보면 참지 못하는 당신!
                    하지만 그렇다고 무모하게 행동이 앞선 사람은 아니에요. 
                    소중한 사람들을 늘 지키고 싶은 정의로운 당신은 섭외부에 가장 잘 어울려요.
                    영적 전쟁의 때에 성도들의 거짓교리에 다치는 일이 없도록 힘쓸 인재가 필요해요. 
                    협력적인 사회인사 섭외를 통해서도 신천지 이미지를 개선시키는데에 당신과 같은 인재가 필요하답니다.
                    섭외부에서 함께 하늘나라의 경찰이 되어보는것은 어떨까요?');

                    $kuk = new Part('kuk', '국내선교부', 
                    '조직을 잘 이끄는 리더십이 있는 당신!  
                    하지만 부드러운 리더십을 갖고 있네요. 
                    이런 당신은 국내선교부에 가장 잘 어울려요! 
                    이 기독교계가 그리고 대한민국이 얼른 소성되기를 바라시지 않나요?
                    국내선교부에서는 많은 목사님들과 성도님들 그리고 신앙이 두려워 제대로 시작해보지 못했던 사람들까지도 참 말씀으로 인도할 인재가 필요해요. 
                    오픈 전도의 시대에 발맞춰 함께 뛰어보는 것은 어떨까요? ');

                    $hong = new Part('hong', '홍보부', 
                    '발 빠르고,긍정적인 당신!
                    생각보다 이것 저것 컨텐츠에 관심이 많네요. 또한 언론에 관심이 많아요!
                    매체관리를 통해 원활한 소통창구가 되어줄 수 있는 능력도 있어요
                    하나님의 나팔이 되어 신천지의 좋은 소식을 널리 알리면 어떨까요?');

                    $bub = new Part('bub', '법무부', 
                    '논리정연하고 확실한 당신!
                    언뜻 보기에 당신은 차가워보일 수도 있지만 실제로는 다른 사람의 말을 잘 경청해주는 타입이네요. 
                    확실하고 객관적인 것을 좋아하다보니 차가운 인상을 줄 수도 있겠네요. 
                    하지만 당신은 누구보다도 다른 사람을 돕고 싶은 선한 마음을 가진 사람이에요. 
                    법무부에서는 하늘 법과 세상 법을 인지하여 성도들을 함께 보호할 인재를 찾고 있어요. 
                    지금 같은 전쟁의 때에 너무나도 중요한 사명 함께하지 않을래요? 
                    ');

                    $kun = new Part('kun', '건설부', 
                    '섬세하고 꼼꼼한 당신! 
                    그러면서도 움직여야 할 때는 움직이는 은근한 행동파네요! 
                    인테리어에도 건축물에도 관심이 많은 당신은 건설부에 가장 잘 어울려요. 
                    건설부에서는 실무 현장에서 함께 뛸 당신과 같은 건축관련 인재가 필요해요. 
                    시몬지파만의 아름다운 성전을 짓고 관리하는 데에 조금 더 가까이에서 기여를 해보는건 어떨까요?');

                    $che = new Part('che', '체육부', 
                    '멋진 열정을 가지고 있는 당신!
                    당신은 체육에 관심이 많은 사람이네요. 또한 열정과 따뜻한 마음도 가지고 있네요!
                    에너지가 넘쳐서 다른 사람에게 긍정적인 기운을 전달해 주네요.
                    체육부에서는 운동실력 뿐만 아니라 따뜻하고 열정적인 인재도 필요해요!
                    스포츠 정신을 기본으로 탑재하고 있는 당신 !
                    아름다운 시몬지파 대표 운동선수로 함께 뛰어보면 어떨까요?');

                    $sa = new Part('sa', '사업부', 
                    '총명한 머리를 가지고 있는 당신!
                    특히 비즈니스 분야에서 두각을 나타내는 당신은 사업부에 가장 잘 어울려요. 
                    그렇다고 당신이 너무 이해타산적이라는건 아니에요!
                    사업부에서는 성도들의 재산을 보호하고 편의성을 증대해줄 인재를 찾고 있어요!
                    보험 및 재정 관련 지식이 있는 당신은 사업부에서 일을 잘 해나갈 수 있을거에요. 
                    꼼꼼한 당신 사업부에서 함께 일해보지 않을래요? ');

                    $bo = new Part('bo', '보건후생복지부', 
                    '어려움을 겪고 있는 사람을 보면 돕고 싶다는 마음을 가진 당신. 
                    당신은 따뜻한 사람이네요. 
                    나라가 발전할수록 복지를 신경 쓴다는 말처럼 하나님의 나라도 더 중요한 만큼 복지에도 많은 노력이 필요하겠죠? 
                    이런 때에 보건후생복지부에서는 보건의료 전문가로 성도들의 안전을 함께 실질적으로 보호해줄 인재를 찾고 있어요! 
                    성도들이 더 안전하게 신앙생활을 함께해갈 수 있도록 함께 일해보는 것은 어떨까요? ');

                    $bong = new Part('bong', '봉사교통부', 
                    '힘든 사람을 보면 나도 모르게 가서 도와주고 있는 당신. 
                    당신은 사회에도 공헌할 수 있는 따뜻한 사람이네요. 
                    봉사교통부에서는 많은 사람들에게 진정한 자원봉사가 무엇인지 알려주고, 행사 때마다 아름다운 하늘 질서로 여기가 하늘나라임을 알려줄 인재가 필요해요.
                    신천지에 대한 부정적인 인식을 봉사라는 멋진 일로 바꿔보는 것을 어떨까요?
                    ');

                    $part = array ($nae, $ki, $jae, $kyo, $sin,
                                    $hae, $jeon, $mun, $chul, $jeong,
                                    $chan, $sub, $kuk, $hong, $bub, 
                                    $kun, $che, $sa, $bo, $bong);

                    foreach($part as $p) {
                        echo '<div class="s-wrap s-wrap-'.$p->getCode().'">
                                <div class="s-text-wrap">
                                    <div class="s-part-wrap">
                                        <h3 class="s-text-part">'.$p->getName().'</h3>
                                        <div class="s-text-line"></div>
                                    </div>
                                    <p class="s-text-part-detail" data-partcode='.$p->getCode().' data-partname='.$p->getName().'>'.$p->getDescription().
                                    '</p>
                                </div>
                                <div class="s-img-wrap">
                                    <img src="../css/images/test/person_'.$p->getCode().'.png" alt="'.$p->getName().' 인재">
                                </div>
                            </div>';
                    }
                ?>               
                <footer>
                    <?php
                        foreach($part as $p) {
                            echo '<button class="s-button-04" onclick="activePart(\''.$p->getCode().'\')">'.$p->getName().'</button>';
                        }
                    ?>
                </footer>
            </article>
            <div></div>
        </section>
    </div>
</div>
</body>
</html>
