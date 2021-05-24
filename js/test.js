let params = {}

function goPrev(p) {
    var $page = $('#s-page-' + p)
    var $prevBtn = $page.find('.s-prevBtn')

    var COUNT
    if (p == 'outer') {
        COUNT = 5
    } else if (p == 'inner') {
        COUNT = 12
    }

    var $wrap = $page.find('.s-wrap.active')
    $wrap.removeClass('active')
    
    var wrapIndex = $wrap.data('wrap')
    if (wrapIndex > 1 && wrapIndex <= COUNT) {
        wrapIndex--
        var wi = (wrapIndex.toString().length == 1) ? '0' + wrapIndex : wrapIndex 

        var $prevWrap = $page.find('.s-wrap-' + wi)
        $prevWrap.addClass('active')

        var $step = $page.find('.s-step')
        $step.text(wi)

        if (wrapIndex == 1) {
            $prevBtn.hide()
        }
    }     
}

function goNext(p) {
    var $page = $('#s-page-' + p)
    // var $nextBtn = $page.find('.s-nextBtn')

    var COUNT
    if (p == 'outer') {
        COUNT = 5
    } else if (p == 'inner') {
        COUNT = 12
    }

    var $wrap = $page.find('.s-wrap.active')
    $wrap.removeClass('active')
    
    var wrapIndex = $wrap.data('wrap')
    console.log('wrapIndex:', wrapIndex)
    console.log('COUNT:', COUNT)
    if (wrapIndex < COUNT) {
        
        if(p == 'outer' && wrapIndex == 1) { // 당신의 소속은?
            var user = {}
            user.church = $('#user_church').val()
            user.group = $('#user_group').val()
            user.subgroup = $('#user_subgroup').val()
            user.name = $('#user_name').val()

            console.log(user)
            params.user = user
        } else if(p == 'outer' && wrapIndex == 2) { // 당신의 전공은?
            var marr = []
            for (var m of $('.s-btn-major.active')) {
                marr.push($(m).data('major'))
            }
            console.log(marr)
            params.major = marr.join(',')
        } else if(p == 'outer' && wrapIndex == 3) { // 당신의 직업은?
            var jarr = []
            for (var j of $('.s-btn-job.active')) {
                jarr.push($(j).data('job'))
            }
            console.log(jarr)
            params.job = jarr.join(',')
        } else if(p == 'outer' && wrapIndex == 4) { // 당신의 자격증은?
            var larr = []
            for (var l of $('.s-btn-license.active')) {
                larr.push($(l).data('license'))
            }
            console.log(larr)
            params.license = larr.join(',')
        }

        wrapIndex++
        var wi = (wrapIndex.toString().length == 1) ? '0' + wrapIndex : wrapIndex 

        var $nextWrap = $page.find('.s-wrap-' + wi)
        $nextWrap.addClass('active')

        var $step = $page.find('.s-step')
        $step.text(wi)

        var $nextBtn = $page.find('.s-nextBtn')
        $nextBtn.removeClass('active')
        $nextBtn.attr('disabled', true)

        var $prevBtn = $page.find('.s-prevBtn')
        if($prevBtn.css('display') == 'none') {
            $prevBtn.show()
        }
    } else {
        if (p == 'outer') {
            // 당신의 소망은?
            var farr = []
                for (var f of $('.s-checkbox-field.active')) {
                    farr.push($(f).data('field'))
                }
            console.log(farr)
            params.field = farr.join(',')
           
            $('#s-page-outer').hide()
            $('#s-page-inner').show()
            $('#s-page-inner .s-art-08').show()
        } else if (p == 'inner') {
            var tarr = []
                for (var t of $('.s-btn-yes.active')) {
                    var $qaWrap = $(t).parents('.s-qa-wrap')
                    tarr.push($qaWrap.data('tendency'))
                }
            console.log(tarr)
            params.tendency = tarr.join(',')

            console.log(params)

            $('#s-page-inner').hide()
            $('#s-page-result').show()
        }
    }
}

function resizeJS(width) {
    if (width > 768) { // PC
        $('#s-page-title .s-title-01').html('하늘인재 성향테스트')
    } else { // 모바일
        $('#s-page-title .s-title-01').html('하늘인재<br> 성향테스트')
    }
}

$(document).ready(function(){

    resizeJS(window.innerWidth)

    $(window).resize(function(){
        resizeJS(window.innerWidth)
    })

    /*
     *  표지
     */
    $('#s-page-title .s-startBtn').click(function(){
        $('#s-page-title').hide()
        $('#s-page-outer').show()
    })

    /*
     *  Step1 표면적인 나
     */
    $('#s-page-outer .s-goBtn').click(function(){
        $('#s-page-outer .s-art-02').hide()
        $('#s-page-outer .s-art-03').show()
    })

    $('#s-page-outer .s-prevBtn').click(function(){
        // 이전 버튼
        goPrev('outer')
    })

    $('#s-page-outer .s-nextBtn').click(function(){
        // 다음 버튼
        goNext('outer')
    })

    /*
     *  Step2 내면적인 나
     */
    $('#s-page-inner .s-goBtn').click(function(){
        $('#s-page-inner .s-art-08').hide()
        $('#s-page-inner .s-art-09').show()
    })

    $('#s-page-inner .s-prevBtn').click(function(){
        // 이전 버튼
        goPrev('inner')
    })

    $('#s-page-inner .s-nextBtn').click(function(){
        // 다음 버튼
        goNext('inner')
    })

    $('#resultBtn').click(function(){
        $('#s-page-title').hide()
        $('#s-page-result').show()
    })


    /*
     * s-art-03 당신은 누구인가요?
     */
    var $church = $('#user_church')
    var $group = $('#user_group')
    var $subgroup = $('#user_subgroup')
    var $name = $('#user_name')

    $('#user_church').keyup(function(){
        if ($church.val() && $group.val() && $subgroup.val() && $name.val() ) {
            console.log($church.val(), $group.val(), $subgroup.val(), $name.val())
            $('#s-page-outer .s-nextBtn').addClass('active')
            $('#s-page-outer .s-nextBtn').attr('disabled', false)
        } else {
            $('#s-page-outer .s-nextBtn.active').removeClass('active')
            $('#s-page-outer .s-nextBtn').attr('disabled', true)
        }
    })
    $('#user_group').keyup(function(){
        if ($church.val() && $group.val() && $subgroup.val() && $name.val() ) {
            console.log($church.val(), $group.val(), $subgroup.val(), $name.val())
            $('#s-page-outer .s-nextBtn').addClass('active')
            $('#s-page-outer .s-nextBtn').attr('disabled', false)
        } else {
            $('#s-page-outer .s-nextBtn.active').removeClass('active')
            $('#s-page-outer .s-nextBtn').attr('disabled', true)
        }
    })
    $('#user_subgroup').keyup(function(){
        if ($church.val() && $group.val() && $subgroup.val() && $name.val() ) {
            console.log($church.val(), $group.val(), $subgroup.val(), $name.val())
            $('#s-page-outer .s-nextBtn').addClass('active')
            $('#s-page-outer .s-nextBtn').attr('disabled', false)
        } else {
            $('#s-page-outer .s-nextBtn.active').removeClass('active')
            $('#s-page-outer .s-nextBtn').attr('disabled', true)
        }
    })
    $('#user_name').keyup(function(){
        if ($church.val() && $group.val() && $subgroup.val() && $name.val() ) {
            console.log($church.val(), $group.val(), $subgroup.val(), $name.val())
            $('#s-page-outer .s-nextBtn').addClass('active')
            $('#s-page-outer .s-nextBtn').attr('disabled', false)
        } else {
            $('#s-page-outer .s-nextBtn.active').removeClass('active')
            $('#s-page-outer .s-nextBtn').attr('disabled', true)
        }
    })

    // 부서별 설명 
    for(var pd of $('.s-text-part-detail')) {
        // var $wrap = $(pd).parents('.s-wrap')

        var text = $(pd).text()
        var name = $(pd).data('partname')
        var code = $(pd).data('partcode')
        text = text.replace(/!/g, '!<br>')
        text = text.replace(/\?/g, '?<br>')
        text = text.replace(/\./g, '.<br>')


        // var regex = new RegExp(name, "g")
        // text = text.replace(regex, '<span class="s-text-highlight">' + name + '</span>')
        text = text.replace(name, '<span class="s-text-highlight">' + name + '</span>')

        if (code == 'nae') {
            text = text.replace('보호하고', '보호하고<br>')
            text = text.replace('있도록', '있도록<br>')
        } else if (code == 'ki') {
            text = text.replace('좋아하고', '좋아하고<br>')
            text = text.replace('연계하고', '연계하고<br>')
            text = text.replace('고민을 하는', '고민을 하는<br>')
        } else if (code == 'jae') {
            text = text.replace('!<br>', '!')
            text = text.replace('재산을', '재산을<br>')
            text = text.replace('건전하게', '건전하게<br>')
            text = text.replace('세심해서', '세심해서<br>')
        } else if (code == 'kyo') {
            text = text.replace('당신은', '당신은<br>')
            text = text.replace('말씀체가 된', '말씀체가 된<br>')
            text = text.replace('관리해줄', '관리해줄<br>')
        } else if (code == 'sin') {
            text = text.replace('전하고,', '전하고,<br>')
            text = text.replace('내재된', '내재된<br>')
            text = text.replace('인도하고', '인도하고<br>')
        } else if (code == 'hae') {
            text = text.replace('당신은', '당신은<br>')
            text = text.replace('말씀을', '말씀을<br>')
        } else if (code == 'jeon') {
            text = text.replace('목표지향적이기만 하고', '목표지향적이기만 하고<br>')
            text = text.replace('갖고 있는', '갖고 있는<br>')
            text = text.replace('행동하는', '행동하는<br>')
            text = text.replace('지금,', '지금,<br>')
        } else if (code == 'mun') {
            text = text.replace('소리도', '소리도<br>')
            text = text.replace('길을', '길을<br>')
            text = text.replace('살려서', '살려서<br>')
            text = text.replace('알려줄', '알려줄<br>')
        } else if (code == 'chul') {
            text = text.replace('모르게', '모르게<br>')
            text = text.replace('듣는', '듣는<br>')
            text = text.replace(/있도록/g, '있도록<br>')
        } else if (code == 'jeong') {
            text = text.replace('핵!<br>', '핵! ')
            text = text.replace('인!<br>', '인! ')
            text = text.replace('싸!<br>', '싸! ')
            text = text.replace('능력을 가지고 있는', '능력을 가지고 있는<br>')
            text = text.replace('정보기술로', '정보기술로<br>')
            text = text.replace('지키고,', '지키고,<br>')
        } else if (code == 'chan') {
            text = text.replace('?<br>', '?')
            text = text.replace('올려드리면', '올려드리면<br>')
            text = text.replace('재능으로 하나님께 영광을', '재능으로 하나님께 영광을<br>')
        } else if (code == 'sub') {
            text = text.replace('정의로운', '정의로운<br>')
            text = text.replace('거짓교리에', '거짓교리에<br>')
            text = text.replace('이미지를', '이미지를<br>')
        } else if (code == 'kuk') {
            text = text.replace('소성되기를', '소성되기를<br>')
            text = text.replace('성도님들 그리고', '성도님들 그리고<br>')
            text = text.replace('사람들까지도', '사람들까지도<br>')
        } else if (code == 'hong') {
            text = text.replace('되어줄 수 있는', '되어줄 수 있는<br>')
            text = text.replace('소식을', '소식을<br>')
        } else if (code == 'bub') {
            text = text.replace('있지만', '있지만<br>')
            text = text.replace('좋아하다보니', '좋아하다보니<br>')
            text = text.replace('돕고 싶은', '돕고 싶은<br>')
            text = text.replace('인지하여', '인지하여<br>')
        } else if (code == 'kun') {
            text = text.replace('많은', '많은<br>')
            text = text.replace('같은', '같은<br>')
            text = text.replace('데에', '데에<br>')
        } else if (code == 'che') {
            text = text.replace('따뜻하고', '따뜻하고<br>')
        } else if (code == 'sa') {
            text = text.replace('당신은', '당신은<br>')
            text = text.replace('편의성을', '편의성을<br>')
            text = text.replace('당신은 사업부에서', '사업부에서<br>')
        } else if (code == 'bo') {
            text = text.replace('말처럼', '말처럼<br>')
            text = text.replace('전문가로', '전문가로<br>')
            text = text.replace('있도록', '있도록<br>')
        } else if (code == 'bong') {
            text = text.replace('자원봉사가', '자원봉사가<br>')
            text = text.replace('질서로', '질서로<br>')
            text = text.replace('일로', '일로<br>')
        }

        $(pd).html(text)
    }

});

function activeMajorBtn(el) {
    $(el).toggleClass('active')

    if($('.s-btn-major.active').length > 0){
        $('#s-page-outer .s-nextBtn').addClass('active')
        $('#s-page-outer .s-nextBtn').attr('disabled', false)
    } else {
        $('#s-page-outer .s-nextBtn.active').removeClass('active')
        $('#s-page-outer .s-nextBtn').attr('disabled', true)
    }
}

function activeJobBtn(el) {
    $(el).toggleClass('active')

    if($('.s-btn-job.active').length > 0){
        $('#s-page-outer .s-nextBtn').addClass('active')
        $('#s-page-outer .s-nextBtn').attr('disabled', false)
    } else {
        $('#s-page-outer .s-nextBtn.active').removeClass('active')
        $('#s-page-outer .s-nextBtn').attr('disabled', true)
    }
}

function activeLicenseBtn(el) {
    $(el).toggleClass('active')

    if($('.s-btn-license.active').length > 0){
        $('#s-page-outer .s-nextBtn').addClass('active')
        $('#s-page-outer .s-nextBtn').attr('disabled', false)
    } else {
        $('#s-page-outer .s-nextBtn.active').removeClass('active')
        $('#s-page-outer .s-nextBtn').attr('disabled', true)
    }
}

function activeField(el) {
    $(el).children('.s-checkbox').toggleClass('active')

    if($('.s-checkbox-field.active').length > 0){
        $('#s-page-outer .s-nextBtn').addClass('active')
        $('#s-page-outer .s-nextBtn').attr('disabled', false)
    } else {
        $('#s-page-outer .s-nextBtn.active').removeClass('active')
        $('#s-page-outer .s-nextBtn').attr('disabled', true)
    }
}

function activeBtn(el, isLast) {
    var $wrap = $(el).parents('.s-wrap')
    var $qaWrap = $(el).parents('.s-qa-wrap')
    var $yesBtn = $qaWrap.find('.s-btn-yes')
    var $noBtn = $qaWrap.find('.s-btn-no')

    if($qaWrap.find('.active').length == 1) {
        $yesBtn.toggleClass('active')
        $noBtn.toggleClass('active')
    } else {
        $(el).toggleClass('active')
    }
    
    if((!isLast && $wrap.find('.active').length == 3) 
        || (isLast && $wrap.find('.active').length == 2)){
        $('#s-page-inner .s-nextBtn').addClass('active')
        $('#s-page-inner .s-nextBtn').attr('disabled', false)
    } else {
        $('#s-page-inner .s-nextBtn.active').removeClass('active')
        $('#s-page-inner .s-nextBtn').attr('disabled', true)
    }
}

function activePart(code) {
    console.log(code)

    var $page = $('#s-page-result')
    console.log($page.find('.s-wrap'))
    $page.find('.s-wrap').removeClass('active')
    
    console.log($page.find('.s-wrap-' + code))
    $page.find('.s-wrap-' + code).addClass('active')
}


