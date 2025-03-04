<?php
$home_page_id = Helper::GeneralWebmasterSettings("home_content4_section_id");

?>
@if($home_page_id >0)
<?php
$HomePage = Helper::Topic(Helper::GeneralWebmasterSettings("home_content4_section_id"));
$page_form = @$HomePage->form; 
?>

@endif 
@if(!empty($HomePage))
@if(@$HomePage->$details_var !="")
<div class="home_section1" dir="rtl" style="background-image: url({{ URL::to('uploads/topics/'.$HomePage->photo_file)}});">
    <div class="container">
        <div class="home_section1_content">
            <div>
                {!! @$HomePage->$details_var !!} 
            </div>
        </div>
    </div>
</div>
@endif
@endif
 

<section class="about-area ptb-48">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-content">
                    <span class="top-title">نبذة عن الجمعية</span>
                    <h2>الجمعية الصيدلية الكويتية</h2>
                    <p>
                        انشئت الجمعية الصيدلية الكويتية في دولة الكويت بتاريخ 23/10/1963 لتكون أول جمعية مهنية في
                        دول
                        مجلس التعاون الخليجي وهى تضم 19635 طبيب وطبيبة بشري يعملون في القطاعين الحكومي والخاص بدولة
                        الكويت و يدير شئون الجمعية مجلس إدارة مكون من سبعة أعضاء ينتخبهم اعضاء الجمعية لمدة سنتان من
                        بين أعضائها
                    </p>
                    <h3>ومن أهدافها</h3>
                    <ul class="about-list">
                        <li>
                            <i class="ri-checkbox-circle-fill"></i>
                            السعي إلى رفع مستوى مهنة الطب والأطباء البشريين بما يحقق أكبر قدر من الرعاية الصحية .
                        </li>
                        <li>
                            <i class="ri-checkbox-circle-fill"></i>
                            المحافظة على شرف المهنة وآدابها وأغراضها النبيلة ، وبحث الأمور المتعلقة بسلوك المهنة
                            لأعضائها .
                        </li>
                        <li>
                            <i class="ri-checkbox-circle-fill"></i>
                            إجراء الدراسات والبحوث العلمية في مختلف فروع الطب التي تحقق مواكبة مهنة الطب في البلاد
                            والتقدم والتطور في عالم الطب ، والتعاون مع الجامعات والكليات والمؤسسات العلمية المحلية
                            والخارجية في هذا المجال .
                        </li>
                    </ul>
                    <div class="read-more-btns">
                        <a href="login.html" class="primary-btn">تسجيل عضو بالجمعية</a>
                        <a href="about.html" class="secondary-btn">عرض المزيد</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="about-img">
                    <img src="assets/images/about/about.png" alt="About Image">
                </div>
            </div>
        </div>
    </div>
</section>