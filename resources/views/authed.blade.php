<!DOCTYPE html>
<html class=" js no-touch csstransforms csstransforms3d svg" lang="vi">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <meta name="description" content="CloudMedia Partners Portal">
  <meta name="viewport" content="width=device-width">
  <link rel="shortcut icon" href="/statics/favicon.ico">
  <link rel="stylesheet" href="/statics/styles/app.min.css">
  @yield('addcss')
</head>
<body>
  <!-- quick launch panel -->
  <div class="quick-launch-panel">
    <div class="container">
      <div class="quick-launcher-inner">
        <a href="javascript:;" class="close" data-toggle="quick-launch-panel">×</a>
        <div class="css-table-xs">
          <div class="col">
            <a href="/instance/new-instance">
              <i class="fa fa-cloud"></i>
              <span>Tạo máy chủ</span>
            </a>
          </div>
          <div class="col">
            <a href="/support/new-ticket">
              <i class="fa fa-ticket"></i>
              <span>Yêu cầu hỗ trợ</span>
            </a>
          </div>
          <div class="col">
            <a href="/account/notification">
              <i class="fa fa-inbox"></i>
              <span>Các tin nhắn</span>
            </a>
          </div>
          <div class="col">
            <a href="/domain/new-domain">
              <i class="fa fa-cart-plus"></i>
              <span>Mua tên miền</span>
            </a>
          </div>
          <div class="col">
            <a href="/affiliate/statics">
              <i class="fa fa-money"></i>
              <span>Doanh thu của bạn</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /quick launch panel -->

  <div class="app layout-fixed-header">
    <!-- sidebar panel -->
    <div class="sidebar-panel offscreen-left">

      <div class="brand">

        <!-- logo -->
        <a href="/"><div class="brand-logo">
          <img src="/statics/images/logo.png" height="15" alt="">
        </div></a>
        <!-- /logo -->

        <!-- toggle small sidebar menu -->
        <a href="javascript:;" class="toggle-sidebar hidden-xs hamburger-icon v3" data-toggle="layout-small-menu">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </a>
        <!-- /toggle small sidebar menu -->

      </div>

      <!-- main navigation -->
      <nav role="navigation" class="ps-container" data-ps-id="d9004187-4db5-f3cd-e576-1fc60a35e984">

        <ul class="nav">

          <!-- dashboard -->
          <li>
            <a href="/">
              <i class="fa fa-dashboard"></i>
              <span>Trang chính</span>
            </a>
          </li>
          <!-- /dashboard -->

          <!-- menu -->
          <li class="menu-accordion">
            <a href="javascript:;">
              <i class="fa fa-server"></i>
              <span>Máy chủ</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="/instance/new-instance">
                  <span>Tạo mới</span>
                </a>
              </li>
              <li>
                <a href="/instance/your-instance">
                  <span>Danh sách</span>
                </a>
              </li>
              <li>
                <a href="/instance/graphs">
                  <span>Biểu đồ</span>
                </a>
              </li>
              <li>
                <a href="/instance/panel">
                  <span>CloudONE Panel</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-accordion">
            <a href="javascript:;">
              <i class="fa fa-paper-plane"></i>
              <span>Tên miền</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="/domain/pricing">
                  <span>Bảng giá</span>
                </a>
              </li>
              <li>
                <a href="/domain/new-domain">
                  <span>Mua mới</span>
                </a>
              </li>
              <li>
                <a href="/domain/add-domain">
                  <span>Chuyển DNS</span>
                </a>
              </li>
              <li>
                <a href="/domain/transfer-domain">
                  <span>Transfer Domain</span>
                </a>
              </li>
              <li>
                <a href="/domain/your-domain">
                  <span>Danh sách</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-accordion">
            <a href="javascript:;">
              <i class="fa fa-sitemap"></i>
              <span>CDN</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="/cdn/new-cdn">
                  <span>Thuê CDN</span>
                </a>
              </li>
              <li>
                <a href="/cdn/your-cdn">
                  <span>CDN của bạn</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-accordion">
            <a href="javascript:;">
              <i class="fa fa-heartbeat"></i>
              <span>Website</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="/web/new-dev">
                  <span>Thiết kế web</span>
                </a>
              </li>
              <li>
                <a href="/web/new-seo">
                  <span>Dịch vụ SEO</span>
                </a>
              </li>
              <li>
                <a href="/web/new-ads">
                  <span>Quảng cáo</span>
                </a>
              </li>
              <li>
                <a href="/web/your-service">
                  <span>Dịch vụ của bạn</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-accordion">
            <a href="javascript:;">
              <i class="fa fa-tablet"></i>
              <span>Ứng dụng</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="/application/new-application">
                  <span>Đặt hàng</span>
                </a>
              </li>
              <li>
                <a href="/application/your-application">
                  <span>App của bạn</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-accordion">
            <a href="javascript:;">
              <i class="fa fa-ticket"></i>
              <span>Hỗ trợ</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="/support/new-ticket">
                  <span>Mở phiếu mới</span>
                </a>
              </li>
              <li>
                <a href="/support/your-ticket">
                  <span>Phiếu của bạn</span>
                </a>
              </li>
              <li>
                <a href="/support/live-chat">
                  <span>Chat trực tuyến</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-accordion">
            <a href="javascript:;">
              <i class="fa fa-money"></i>
              <span>Thanh toán</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="/billing/new-invoice">
                  <span>Nạp tiền</span>
                </a>
              </li>
              <li>
                <a href="/billing/your-invoice">
                  <span>Hoá đơn</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-accordion">
            <a href="javascript:;">
              <i class="fa fa-user-plus"></i>
              <span>Kiếm tiền</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="/affiliate/statics">
                  <span>Thống kê</span>
                </a>
              </li>
              <li>
                <a href="/affiliate/withdrawn">
                  <span>Rút tiền</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-accordion">
            <a href="javascript:;">
              <i class="fa fa-coffee"></i>
              <span>Tin tức</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="/announcement/" target="_blank">
                  <span>Thông báo</span>
                </a>
              </li>
              <li>
                <a href="https://www.cloudmedia.vn/tin-tuc/" target="_blank">
                  <span>Tin Tức</span>
                </a>
              </li>
              <li>
                <a href="https://www.cloudmedia.vn/tai-lieu/" target="_blank">
                  <span>Tài liệu hướng dẫn</span>
                </a>
              </li>
              <li>
                <a href="https://www.cloudmedia.vn/thac-mac-thuong-gap/" target="_blank">
                  <span>Thắc mắc thường gặp</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-accordion">
            <a href="javascript:;">
              <i class="fa fa-key"></i>
              <span>Tài khoản</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="/account/notification">
                  <span>Tin nhắn</span>
                </a>
              </li>
              <li>
                <a href="/account/setting">
                  <span>Thiết lập</span>
                </a>
              </li>
              <li>
                <a href="/account/password">
                  <span>Đổi mật khẩu</span>
                </a>
              </li>
              <li>
                <a href="/auth/logout">
                  <span>Đăng xuất</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- menu -->

        </ul>
      <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div></div></nav>
      <!-- /main navigation -->

    </div>
    <!-- /sidebar panel -->

    <!-- content panel -->
    <div class="main-panel">
      <!-- top header -->
      <header class="header navbar">

        <div class="brand visible-xs">
          <!-- toggle offscreen menu -->
          <div class="toggle-offscreen">
            <a href="#" class="hamburger-icon visible-xs" data-toggle="offscreen" data-move="ltr">
              <span></span>
              <span></span>
              <span></span>
            </a>
          </div>
          <!-- /toggle offscreen menu -->

          <!-- logo -->
          <div class="brand-logo">
            <img src="/statics/images/logo-dark.png" height="15" alt="">
          </div>
          <!-- /logo -->

          <!-- toggle chat sidebar small screen-->
          <div class="toggle-chat">
            <a href="javascript:;" class="hamburger-icon v2 visible-xs hidden-lg hidden-md hidden-sm" data-toggle="layout-chat-open">
              <span></span>
              <span></span>
              <span></span>
            </a>
          </div>
          <!-- /toggle chat sidebar small screen-->
        </div>

        <ul class="nav navbar-nav hidden-xs">
          <li>
            <p class="navbar-text">@yield('title')</p>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right hidden-xs">
          <li>
            <a href="javascript:;" data-toggle="quick-launch-panel">
              <i class="fa fa-power-off"></i>
            </a>
          </li>

          <li>
            <a href="javascript:;" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <div class="status bg-danger border-danger animated bounce"></div>
            </a>
            <ul class="dropdown-menu notifications" id="instant_notify">
              <li class="notifications-header"><p class="text-muted small">Bạn không có tin nhắn mới nào</p></li>
              <li><ul class="notifications-list"><li>
                <a href="/account/notification"><div class="pull-left mt2 mr15">
                  <div class="circle-icon bg-info"><i class="fa fa-comment"></i></div>
                </div>
                <div class="overflow-hidden"><span>Xem toàn bộ tin nhắn</span><span class="time">các tin đã đọc</span></div></a>
              </li></ul></li>
            </ul>
          </li>

          <li>
            <a href="javascript:;" data-toggle="dropdown">
              <img src="" class="header-avatar img-circle ml10" alt="user" title="user">
              <span class="pull-left">Tên khách</span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="/account/setting">Thiết lập</a>
              </li>
              <li>
                <a href="/account/password">Đổi mật khẩu</a>
              </li>
              <li>
                <a href="/account/notification">
                  <span class="label bg-info pull-right" id="instant_notify_n">0</span>
                  <span>Tin nhắn</span>
                </a>
              </li>
              <li>
                <a href="https://www.cloudmedia.vn/thac-mac-thuong-gap/" target="_blank">Thắc mắc</a>
              </li>
              <li>
                <a href="/auth/logout">Đăng xuất</a>
              </li>
            </ul>

          </li>

          <li>
            <a href="javascript:;" class="hamburger-icon v2 hidden-lg hidden-md hidden-sm" data-toggle="layout-chat-open">
              <span></span>
              <span></span>
              <span></span>
            </a>
          </li>
        </ul>
      </header>
      <!-- /top header -->
      
      <!-- main content -->
      <div class="main-content">
        @yield('content')
      </div>
      <!-- /main content -->
      
    </div>
    <!-- /content panel -->

    <!-- bottom footer -->
    <footer class="content-footer">

      <nav class="footer-right">
        <ul class="nav">
          <li>
            <a href="javascript:;" data-toggle="modal" data-target="#feedback">Góp Ý</a>
          </li>
          <li>
            <a href="javascript:;" class="scroll-up">
              <i class="fa fa-angle-up"></i>
            </a>
          </li>
        </ul>
      </nav>

      <nav class="footer-left">
        <ul class="nav">
          <li>
            <a href="javascript:;">Bản quyền <i class="fa fa-copyright"></i> <span>CloudMedia</span> 2016. Bảo lưu mọi quyền</a>
          </li>
          <li>
            <a href="javascript:;">Tuyển Dụng</a>
          </li>
          <li>
            <a href="javascript:;">
                Quy định dịch vụ
            </a>
          </li>
        </ul>
      </nav>

    </footer>
    <!-- /bottom footer -->

    <!-- chat -->
    <div class="chat-panel">
      <div class="chat-inner">
        <div class="chat-users">
          <div class="nav-justified-xs">

            <ul class="nav nav-tabs nav-justified ">
              <li class="active">
                <a href="javascript:;">Tin nhắn</a>
              </li>
            </ul>
          </div>

          <div class="tab-content">
            <div class="tab-pane active">
              <ol class="activity-feed" id="instant_notify_footer">
                <li class="feed-item">
                  <span>Chưa có dữ liệu</span>
                  <time datetime="2016-01-01 00:00">Chưa có dữ liệu</time>
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /chat -->
  </div>
  <div class="modal bs-modal-sm" tabindex=-1 role="dialog" aria-hidden="true" id="feedback">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Góp ý báo lỗi</h4>
      </div>
      <div class="modal-body">
        <p>Cám ơn bạn đã có nhã ý góp ý/báo lỗi về website/dịch vụ của CloudMedia.</p>
        <div class="row">
          <div class="col-xs-12">
            <label>Nội dung</label>
            <textarea class="form-control" rows="5" id="feedback_content"></textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer no-border">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        <button type="button" class="btn btn-primary" id="feedback_send">Gửi</button>
      </div>
    </div>
  </div>
</div>
  <script src="/statics/app/app.min.js"></script>
  @yield('addjs')
</body>
</html>
