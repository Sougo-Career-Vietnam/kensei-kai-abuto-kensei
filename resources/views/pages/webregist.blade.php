@extends('layouts.app')

@section('title', $page->title ?? '')

@section('content')

    <div id="contentArea">

        <link rel="stylesheet" media="all" href="./css/webregist.css"/>
        {{-- <script type="text/javascript" src="./js/page.js"></script> --}}
        <div id="kensei_contact" class="kensei_contact">
            <div class="w_mb js-fadein">
                <div class="block_banner">
                    <div class="inner">
                        <picture>
                            <source media="(max-width: 767px)" srcset="{{asset('images/kensei_contact/banner_contact_mb.png')}} 2x">
                            <source media="(min-width: 768px)" srcset="{{asset('images/kensei_contact/banner_contact.png')}} 2x">
                            <img class="sizes" src="{{asset('images/kensei_contact/banner_contact.png')}}" alt="">
                        </picture>
                    </div>
                </div>
    
                <div class="block_desc content-block">
                    <div class="content-text">
                        <p>2025年3月1日、<br class="only_mb">あふと健生苑が増床し、<br class="only_mb">スタッフを募集します！</p>
                        <p>見学会では、<br class="only_mb">仕事内容や施設について <br class="only_mb">詳しくご紹介いたします。</p>
                        <p>ぜひ、この機会に <br class="only_mb">職場環境を直感ご覧ください。</p>
                    </div>
                </div>
            </div>
            <div class="block_lesson js-fadein">
                <div class="inner">
                    <!-- Section 1: 見学会で分かること -->
                    <h2 class="section-title">見学会で分かること</h2>
                    <div class="info-circles">
                        <div class="circle">
                            <img class="img1 image" src="{{asset('images/kensei_contact/job.png')}}" alt="仕事内容">
                            <p>仕事内容</p>
                        </div>
                        <div class="circle">
                            <img class="img2 image" src="{{asset('images/kensei_contact/facility.png')}}" alt="施設の様子">
                            <p>施設の様子</p>
                            <img class="img3 image" src="{{asset('images/kensei_contact/icon_4.png')}}" alt="施設の様子">
                        </div>
                        <div class="circle">
                            <img class="img4 image" src="{{asset('images/kensei_contact/benefits.png')}}" alt="待遇・福利厚生">
                            <p class="only_pc">待遇・福利厚生</p>
                            <p class="only_mb">待遇<br>福利厚生</p>


                  
                        </div>
                    </div>
                </div>
                <div class="inner inner_lesson">
                    <!-- Section 2: 見学会の流れ -->
                    <div class="wrapper_section2">
                        <h2 class="section-title section-title-2">
                            <span>見学会の流れ</span>
                        </h2>
                        <p class="sub-text">※時間は、1回60分程度です。</p>
                        <div class="steps">
                            <div class="step">
                                <div class="step-header">01</div>
                                <div class="step-content">
                                    <p class="step-title">あふと健生会のご説明</p>
                                    <p class="text_desc">あぶと健生会について、<br>
                                        また一日の働き方について <br>
                                        ご説明いたします。</p>
                                </div>
                            </div>
                            <div class="step">
                                <div class="step-header">02</div>
                                <div class="step-content">
                                    <p class="step-title">募集要項のご案内</p>
                                    <p class="text_desc">勤務体制、給与、手当、<br>
                                        福利厚生などについて <br>
                                        ご説明いたします。</p>
                                </div>
                            </div>
                            <div class="step">
                                <div class="step-header">03</div>
                                <div class="step-content">
                                    <p class="step-title">質問タイム</p>
                                    <p class="text_desc">質疑応答を受け付けます。<br>
                                        どんな質問でも <br>
                                        お気軽にどうぞ！</p>
                                </div>
                            </div>
                            <div class="step">
                                <div class="step-header">04</div>
                                <div class="step-content">
                                    <p class="step-title">施設見学会</p>
                                    <p class="text_desc">最新設備（ICT）を活用した <br>
                                        働き方など、あぶと健生苑の <br>
                                        魅力をご紹介します。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
    
            <div class="block_overview js-fadein">
                <div class="inner">
                    <!-- Tiêu đề -->
                    <h2 class="section-title">概要</h2>
                    <!-- Nội dung chính -->
                    <div class="info-box">
                        <!-- Row 1: 開催日時 -->
                        <div class="info-row">
                            <div class="info-label">開催日時</div>
                            <div class="info-content">
                                <span class="label">平日</span> <strong class="time">10:00 <span class="td">～</span>
                                16:00</strong><br>
                                <p>
                                    ※申し込みフォームの参加希望日時に<br class="only_mb"><span class="cl_mb">第三希望までご記入ください。</span><br>
                                    ※基本的には平日ですが、土日祝を希望の方も <br class="only_mb"><span class="cl_mb">フォームよりお申し込みください。</span>
                                </p>
                            </div>
                        </div>
                        <!-- Row 2: 会場 -->
                        <div class="info-row">
                            <div class="info-label">会場</div>
                            <div class="info-content">あふと健生苑</div>
                        </div>
                        <!-- Row 3: 住所 -->
                        <div class="info-row">
                            <div class="info-label">住所</div>
                            <div class="info-content">広島県福山市 <br class="only_mb">沼隈町大字能登原字明神1436番1</div>
                        </div>
                        <!-- Row 4: お問い合わせ先 -->
                        <div class="info-row">
                            <div class="info-label">お問い合わせ先</div>
                            <div class="info-content">
                                <strong class="contact-number">084-987-1299</strong><br class="only_mb">
                                <span>採用担当：倉本</span>
                            </div>
                        </div>
                        <!-- Row 5: 対象 -->
                        <div class="info-row">
                            <div class="info-label">対象</div>
                            <div class="info-content">
                                <div class="p1">
                                    <strong>看護師</strong>
                                    <p>正看護師 <br>
                                        オンコールできる方歓迎</p>
                                    <div class="p2">
                                        <strong>介護職</strong><br>
                                        <p class="p3">
                                            次のいずれかの研修修了者又は資格者優遇 <br>
                                            初任者研修修了者、実務者研修修了者、<br class="only_mb">
                                            介護職員基礎研修<br>
                                            訪問介護員1級、訪問介護員2級、介護福祉士<br>
                                            夜勤できる方歓迎<br>
                                            <span class="only_mb">※未経験者の方も歓迎です！</span><br>
                                        </p>
                                        <span class="highlight only_pc">※未経験者の方も歓迎です！</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="block_contact_form js-fadein">
                    <div class="inner">
                        <div class="form_wrap">
                            <h2 class="section-title">申し込みフォーム</h2>
                            <p class="sub-text">下記フォームに必要事項を入力し<br class="only_mb">「内容を確認する」ボタンを押してください
                                <br class="only_mb">
                                ご登録後に、弊社担当者より<br class="only_mb">ご希望の連絡方法で折り返しいたします。</p>
                            <div class="form-container">
                                <div class="steps">
                                    <div class="step active">
                                        <div class="label">
                                            <span class="text">step</span> 01
                                        </div>
                                        <span>お申込み情報の<br class="only_mb">入力</span>
                                    </div>
                                    <div class="step">
                                        <div class="label">
                                            <span class="text">step</span> 02
                                        </div>
                                        <span>入力情報の<br class="only_mb">確認</span>
                                    </div>
                                    <div class="step">
                                        <div class="label">
                                            <span class="text">step</span> 03
                                        </div>
                                        <span>お申込み <br class="only_mb">完了</span>
                                    </div>
                                </div>
    
                                <div class="form_container">
                                    <div class="form-row">
                                        <label class="required">参加希望日時</label>
                                        <div class="input-group">
                                            <div class="d-flex">
                                                <span class="label">第1希望</span>
                                                <input type="text" placeholder="例：○○月○○日 ○○時～">
                                            </div>
                                            <div class="d-flex">
                                                <span class="label">第2希望</span>
                                                <input type="text" placeholder="例：○○月○○日 ○○時～">
                                            </div>
                                            <div class="d-flex">
                                                <span class="label">第3希望</span>
                                                <input type="text" placeholder="例：○○月○○日 ○○時～">
                                            </div>
                                        </div>
                                    </div>
    
                                    <!-- お名前 -->
                                    <div class="form-row">
                                        <label class="required">お名前</label>
                                        <div class="name-group">
                                            <div class="d-flex">
                                                <span class="label">姓</span>
                                                <input type="text">
                                            </div>
    
                                            <div class="d-flex">
                                                <span class="label">名</span>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>
    
                                    <!-- お名前（カナ） -->
                                    <div class="form-row">
                                        <label class="required">お名前（カナ）</label>
                                        <div class="name-group">
                                            <div class="d-flex">
                                                <span class="label">セイ</span>
                                                <input type="text">
                                            </div>
    
                                            <div class="d-flex">
                                                <span class="label">メイ</span>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>
    
                                    <!-- 生年月日 -->
                                    <div class="form-row">
                                        <label class="required">生年月日</label>
                                        <div class="dob-group">
                                            <div class="custom-select">
                                                <select>
                                                    <option>選択してください</option>
                                                </select>
                                                <span>年</span>
                                            </div>
                                            <div class="custom-select">
                                                <select>
                                                    <option>選択してください</option>
                                                </select>
                                                <span>月</span>
                                            </div>
                                            <div class="custom-select">
                                                <select>
                                                    <option>選択してください</option>
                                                </select>
                                                <span>日</span>
                                            </div>
                                        </div>
                                    </div>
    
                                    <!-- 性別 -->
                                    <div class="form-row">
                                        <label class="required">性別</label>
                                        <div class="radio-group">
                                            <label><input type="radio" name="gender"> 男性</label>
                                            <label><input type="radio" name="gender"> 女性</label>
                                        </div>
                                    </div>
    
                                    <!-- 住所 -->
                                    <div class="form-row">
                                        <label class="required">住所</label>
                                        <div class="group-info group_address">
                                            <div class="d-flex">
                                                <label>郵便番号</label>
                                                <input type="text" placeholder="" class="width-200">
                                                <span class="label_text only_pc">郵便番号から住所を検索</span>
                                                <span class="label_text only_mb">郵便番号検索</span>
                                            </div>
                                            <div class="d-flex">
                                                <label>都道府県</label>
                                                <div class="custom-select custom-select_address">
                                                    <select class="width-400">
                                                        <option>選択してください</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <label>市区町村</label>
                                                <div class="custom-select custom-select_address">
                                                    <select class="width-400">
                                                        <option>選択してください</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <label>以降の住所</label>
                                                <input type="text" class="width-700" placeholder="">
                                            </div>
                                            <div class="d-flex">
                                                <label>最寄駅</label>
                                                <input type="text" class="width-700" placeholder="">
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="form-row">
                                        <label class="required">電話番号</label>
                                        <input type="tel" placeholder="例: 080-1234-5678" required>
                                    </div>
    
                                    <div class="form-row">
                                        <label class="required">メールアドレス</label>
                                        <div class="d-flex">
                                            <input type="email" placeholder="例: example@example.com" required>
                                            <p class="desc">携帯電話可。迷惑メール対策等で、ドメイン指定受信されている場合は、弊社からのメールが正しく届かない場合がございます。メールドメイン「@1049.cc」を受信できるよう設定してください。</p>
                                        </div>
                                    </div>
    
                                    <div class="form-row">
                                        <label class="required">現在の職業</label>
                                        <div class="custom-select">
                                            <select class="width-200-job">
                                                <option>選択してください</option>
                                            </select>
                                        </div>
                                    </div>
    
                                    <div class="form-row">
                                        <label>最終学歴</label>
                                        <div class="group-info level_education">
                                            <div class="d-flex">
                                                <label>学校区分</label>
                                                <div class="custom-select">
                                                    <select class="width-400">
                                                        <option>選択してください</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <label>卒業年度</label>
                                                <div class="custom-select">
                                                    <select class="width-400">
                                                        <option>選択してください</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <label>状態</label>
                                                <div class="custom-select">
                                                    <select class="width-400">
                                                        <option>選択してください</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <label>学校名</label>
                                                <input type="text" placeholder="例：○○大学" class="width-700">
                                            </div>
                                            <div class="d-flex">
                                                <label>学部/学科名</label>
                                                <input type="text" placeholder="例：経済学部 経済学科" class="width-700">
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="form-row">
                                        <label>保有資格</label>
                                        <textarea placeholder="例: 看護師資格" rows="9"></textarea>
                                    </div>
    
                                    <!-- Footer -->
                                    <div class="form-row form-footer">
                                        <div class="d-flex">
                                            <label><input type="checkbox"> 個人情報の取り扱いに同意する</label>
                                            <p>
                                                <a href="#">個人情報の取り扱いについて</a>
                                            </p>
                                        </div>
                                        <button type="submit" class="submit-btn">内容を確認する</button>

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
