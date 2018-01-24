<?php

use yii\helpers\Url;
use frontend\assets\AppAsset;

$this->title = '新建任务';
$this->registerJsFile('//unpkg.com/wangeditor/release/wangEditor.min.js', [
    AppAsset::className(),
    'depends' => 'frontend\assets\AppAsset'
]);
$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
?>
    <div class="row">
        <div class="col-md-3">
            <?= \common\widgets\TaskCategory::widget() ?>
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">课堂2.0版本</h3>

                    <div class="box-tools pull-right">
                        <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title=""
                           data-original-title="Previous"><i class="fa fa-chevron-left"></i></a>
                        <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title=""
                           data-original-title="Next"><i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="mailbox-read-info">
                        <h3>管理系统，班测记录统计要加上教师布置给学生的测试任务</h3>
                        <h5>From: wuzhc
                            <span class="mailbox-read-time pull-right">2018-01-22 10:00:00</span></h5>
                    </div>
                    <!-- /.mailbox-read-info -->
                    <div class="mailbox-controls with-border text-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip"
                                    data-container="body" title="" data-original-title="Delete">
                                <i class="fa fa-trash-o"></i></button>
                            <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip"
                                    data-container="body" title="" data-original-title="Reply">
                                <i class="fa fa-reply"></i></button>
                            <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip"
                                    data-container="body" title="" data-original-title="Forward">
                                <i class="fa fa-share"></i></button>
                        </div>
                        <!-- /.btn-group -->
                        <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title=""
                                data-original-title="Print">
                            <i class="fa fa-print"></i></button>
                    </div>
                    <!-- /.mailbox-controls -->
                    <div class="mailbox-read-message">
                        <p>Hello John,</p>

                        <p>目前管理系统的班测记录，只统计学生和教师通过扫描答题卡提交的测试。

                            现在教师布置给学生的测试任务，也要统计，学科按试卷的学科，年级按布置班级的年级统计

                            学生自主选择试卷做题提交给教师的，也要统计，学科按试卷的学科，年级按学生的年级统计

                            学生自主选择试卷做题但不提交给教师的，不统计</p>

                        <p>目前管理系统的班测记录，只统计学生和教师通过扫描答题卡提交的测试。

                            现在教师布置给学生的测试任务，也要统计，学科按试卷的学科，年级按布置班级的年级统计

                            学生自主选择试卷做题提交给教师的，也要统计，学科按试卷的学科，年级按学生的年级统计

                            学生自主选择试卷做题但不提交给教师的，不统计

                            image.png</p>

                        <p>Post-ironic shabby chic VHS, Marfa keytar flannel lomo try-hard keffiyeh cray. Actually fap
                            fanny
                            pack yr artisan trust fund. High Life dreamcatcher church-key gentrify. Tumblr stumptown
                            four dollar
                            toast vinyl, cold-pressed try-hard blog authentic keffiyeh Helvetica lo-fi tilde
                            Intelligentsia. Lomo
                            locavore salvia bespoke, twee fixie paleo cliche brunch Schlitz blog McSweeney's messenger
                            bag swag
                            slow-carb. Odd Future photo booth pork belly, you probably haven't heard of them actually
                            tofu ennui
                            keffiyeh lo-fi Truffaut health goth. Narwhal sustainable retro disrupt.</p>

                        <p>Skateboard artisan letterpress before they sold out High Life messenger bag. Bitters chambray
                            leggings listicle, drinking vinegar chillwave synth. Fanny pack hoodie American Apparel
                            twee. American
                            Apparel PBR listicle, salvia aesthetic occupy sustainable Neutra kogi. Organic synth Tumblr
                            viral
                            plaid, shabby chic single-origin coffee Etsy 3 wolf moon slow-carb Schlitz roof party
                            tousled squid
                            vinyl. Readymade next level literally trust fund. Distillery master cleanse migas, Vice
                            sriracha
                            flannel chambray chia cronut.</p>

                        <p>Thanks,<br>Jane</p>
                    </div>
                    <!-- /.mailbox-read-message -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <ul class="mailbox-attachments clearfix">
                        <li>
                            <span class="mailbox-attachment-icon"><i class="fa fa-file-pdf-o"></i></span>

                            <div class="mailbox-attachment-info">
                                <a href="#" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i>
                                    Sep2014-report.pdf</a>
                                <span class="mailbox-attachment-size">
                          1,245 KB
                          <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                        </span>
                            </div>
                        </li>
                        <li>
                            <span class="mailbox-attachment-icon"><i class="fa fa-file-word-o"></i></span>

                            <div class="mailbox-attachment-info">
                                <a href="#" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> App
                                    Description.docx</a>
                                <span class="mailbox-attachment-size">
                          1,245 KB
                          <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                        </span>
                            </div>
                        </li>
                        <li>
                            <span class="mailbox-attachment-icon has-img"><img
                                        src="<?= $directoryAsset ?>/img/photo1.png" alt="Attachment"></span>

                            <div class="mailbox-attachment-info">
                                <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> photo1.png</a>
                                <span class="mailbox-attachment-size">
                          2.67 MB
                          <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                        </span>
                            </div>
                        </li>
                        <li>
                            <span class="mailbox-attachment-icon has-img"><img
                                        src="<?= $directoryAsset ?>/img/photo2.png" alt="Attachment"></span>

                            <div class="mailbox-attachment-info">
                                <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> photo2.png</a>
                                <span class="mailbox-attachment-size">
                          1.9 MB
                          <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                        </span>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /.box-footer -->
                <div class="box-footer">
                    <div class="pull-right">
                        <button type="button" class="btn btn-default"><i class="fa fa-reply"></i> Reply</button>
                        <button type="button" class="btn btn-default"><i class="fa fa-share"></i> Forward</button>
                    </div>
                    <button type="button" class="btn btn-default"><i class="fa fa-trash-o"></i> Delete</button>
                    <button type="button" class="btn btn-default"><i class="fa fa-print"></i> Print</button>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /. box -->
        </div>
        <!-- /.col -->
    </div>

    <script>
        <?php $this->beginBlock('taskView') ?>
        $(function () {

            var curPage = 1;
            var totalPage = 0;
            var projectID = "<?= $_GET['projectID'] ?>";
            var categoryID = null;

            $('#task-index').on('click', '#task-category>li', function () {
                categoryID = $(this).data('id');
                renderList();
            });

            var ajaxBort = null;

            // 渲染列表
            function renderList(options) {
                var params = $.extend({
                    totalInit: 1,
                    pageSize: 10,
                    page: curPage,
                    categoryID: categoryID
                }, options);
                var url = "<?=\yii\helpers\Url::to(['task/list', 'projectID' => $_GET['projectID']])?>";

                ajaxBort && ajaxBort.abort();
                ajaxBort = $.ajax({
                    type: 'GET',
                    url: url,
                    data: params,
                    dataType: 'json'
                }).done(function (data) {

                    // 页码设置
                    $('#task-cur-page').text(curPage);
                    if (params.totalInit === 1) {
                        if (data.data.total > 0) {
                            totalPage = (data.data.total / params.pageSize).toFixed(0);
                            $('#task-total').text(data.data.total);
                            $('#task-total-page').text(totalPage);
                        } else {
                            $('#task-total').text(0);
                            $('#task-total-page').text(0);
                        }
                    }

                    // 上一页
                    if (curPage - 1 <= 0) {
                        $('.btn-prev').attr('disabled', true);
                    } else {
                        $('.btn-prev').removeAttr('disabled');
                    }

                    // 下一页
                    if (curPage + 1 > totalPage) {
                        $('.btn-next').attr('disabled', true);
                    } else {
                        $('.btn-next').removeAttr('disabled');
                    }

                    // 标题链接
                    var info = data.data.info || {};
                    if (info) {
                        $('#task-category-title').text(info.name);
                        $('#task-category-url').removeClass('hidden').attr('href', "<?= Url::to(['task/create'])?>&categoryID=" + info.id + '&projectID=' + projectID);
                    } else {
                        $('#task-category-title').text('全部');
                        $('#task-category-url').addClass('hidden');
                    }

                    var list = data.data.list || [];
                    var len = list.length;
                    var html = '';
                    if (len > 0) {
                        html = template.render('task-template', {list: list});
                        $('#task-list').html(html);
                        $('.mailbox-messages input[type="checkbox"]').iCheck({
                            checkboxClass: 'icheckbox_flat-green',
                            radioClass: 'iradio_flat-green'
                        });
                    } else {
                        html = template.render('none-task-template');
                        $('#task-list').html(html);
                    }
                }).fail(function () {
                    $.showBox({msg: '系统繁忙~'});
                })
            }

            renderList({});

        })
        <?php $this->endBlock() ?>
    </script>
<?php $this->registerJs($this->blocks['taskView'], \yii\web\View::POS_END); ?>