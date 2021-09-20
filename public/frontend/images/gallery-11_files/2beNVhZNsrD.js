if (self.CavalryLogger) { CavalryLogger.start_js(["ehl4ljG"]); }

__d("ClickableAreaButton.react",["cx","invariant","Focus","ReactDOM","react"],(function(a,b,c,d,e,f,g,h,i){var j=d("react");a=function(a){babelHelpers.inheritsLoose(b,a);function b(){return a.apply(this,arguments)||this}var c=b.prototype;c.componentDidMount=function(){this.$1&&d("Focus").relocate(d("ReactDOM").findDOMNode(this.$1),d("ReactDOM").findDOMNode(this))};c.focus=function(){d("Focus").set(this.$1)};c.render=function(){var a=this,b=this.props,c=b.children,d=b.disabled,e=b.label,f=b.onClick,g=b.onMouseDown,h=b.onMouseEnter,k=b.onMouseMove,l=b.onMouseOut,m=b.onMouseLeave,n=b.pressed;b=b.tabIndex;c=j.Children.only(c);c.props.onClick&&i(0,2794);n=f?j.jsx("button",{"aria-pressed":n,className:"accessible_elem",disabled:d,label:e,tabIndex:b,ref:function(b){return a.$1=b},children:e},"accessible_button"):null;return j.cloneElement(c,{onClick:d?null:f,onMouseDown:g,onMouseEnter:h,onMouseMove:k,onMouseOut:l,onMouseLeave:m},[c.props.children,n])};return b}(j.Component);g["default"]=a}),98);
__d("PluginFollow",["Arbiter","CSS"],(function(a,b,c,d,e,f,g){"use strict";a=function(a,b){this.$1=a,this.$2=b,c("Arbiter").subscribe("embeddedFollowSuccess",function(c,e){d("CSS").addClass(a,"hidden_elem"),d("CSS").removeClass(b,"hidden_elem")}),c("Arbiter").subscribe("embeddedUnfollowSuccess",function(c,e){d("CSS").removeClass(a,"hidden_elem"),d("CSS").addClass(b,"hidden_elem")})};g["default"]=a}),98);
__d("VideoHomeTypedLogger",["Banzai","GeneratedLoggerUtils","nullthrows"],(function(a,b,c,d,e,f){"use strict";a=function(){function a(){this.$1={}}var c=a.prototype;c.log=function(a){b("GeneratedLoggerUtils").log("logger:VideoHomeLoggerConfig",this.$1,b("Banzai").BASIC,a)};c.logVital=function(a){b("GeneratedLoggerUtils").log("logger:VideoHomeLoggerConfig",this.$1,b("Banzai").VITAL,a)};c.logImmediately=function(a){b("GeneratedLoggerUtils").log("logger:VideoHomeLoggerConfig",this.$1,{signal:!0},a)};c.clear=function(){this.$1={};return this};c.getData=function(){return babelHelpers["extends"]({},this.$1)};c.updateData=function(a){this.$1=babelHelpers["extends"]({},this.$1,a);return this};c.setApnsPayload=function(a){this.$1.apns_payload=a;return this};c.setAsynchronouslyLoadedHscrollContent=function(a){this.$1.asynchronously_loaded_hscroll_content=a;return this};c.setAttributionID=function(a){this.$1.attribution_id=a;return this};c.setAudioExternal=function(a){this.$1.audio_external=a;return this};c.setAudioMuted=function(a){this.$1.audio_muted=a;return this};c.setBadgeCheckInterval=function(a){this.$1.badge_check_interval=a;return this};c.setBadgeCooldown=function(a){this.$1.badge_cooldown=a;return this};c.setBadgeCount=function(a){this.$1.badge_count=a;return this};c.setBadgeIds=function(a){this.$1.badge_ids=a;return this};c.setBadgeRankingConsumptionClass=function(a){this.$1.badge_ranking_consumption_class=a;return this};c.setBadgeRankingModelScore=function(a){this.$1.badge_ranking_model_score=a;return this};c.setBadgeType=function(a){this.$1.badge_type=a;return this};c.setBoostID=function(a){this.$1.boost_id=a;return this};c.setBroadcastStatusExplicit=function(a){this.$1.broadcast_status_explicit=a;return this};c.setCachedResponseAge=function(a){this.$1.cached_response_age=a;return this};c.setCampaignID=function(a){this.$1.campaign_id=a;return this};c.setCanShowPill=function(a){this.$1.can_show_pill=a;return this};c.setChannelID=function(a){this.$1.channel_id=a;return this};c.setChannelPosition=function(a){this.$1.channel_position=a;return this};c.setClickPoint=function(a){this.$1.click_point=a;return this};c.setClickTarget=function(a){this.$1.click_target=a;return this};c.setClientEventTime=function(a){this.$1.client_event_time=a;return this};c.setConnectionType=function(a){this.$1.connection_type=a;return this};c.setCreatorStatus=function(a){this.$1.creator_status=a;return this};c.setCsrStateSeen=function(a){this.$1.csr_state_seen=a;return this};c.setCsrStorySource=function(a){this.$1.csr_story_source=a;return this};c.setCurrentScrollOffset=function(a){this.$1.current_scroll_offset=a;return this};c.setDataDirtyReason=function(a){this.$1.data_dirty_reason=a;return this};c.setDataFreshness=function(a){this.$1.data_freshness=a;return this};c.setDataPrefetchStatus=function(a){this.$1.data_prefetch_status=a;return this};c.setDataSource=function(a){this.$1.data_source=a;return this};c.setDataStaleInterval=function(a){this.$1.data_stale_interval=a;return this};c.setDeeplinkSenderID=function(a){this.$1.deeplink_sender_id=a;return this};c.setDestModule=function(a){this.$1.dest_module=a;return this};c.setDestModuleClass=function(a){this.$1.dest_module_class=a;return this};c.setDeviceType=function(a){this.$1.device_type=a;return this};c.setDeviceYearClass=function(a){this.$1.device_year_class=a;return this};c.setDiscoverCacheEnabled=function(a){this.$1.discover_cache_enabled=a;return this};c.setDuplicateStoryID=function(a){this.$1.duplicate_story_id=a;return this};c.setDuration=function(a){this.$1.duration=a;return this};c.setEligibleForHscrollCount=function(a){this.$1.eligible_for_hscroll_count=a;return this};c.setEntryPointType=function(a){this.$1.entry_point_type=a;return this};c.setEntryPointValue=function(a){this.$1.entry_point_value=a;return this};c.setErrorUserInfo=function(a){this.$1.error_user_info=a;return this};c.setEvent=function(a){this.$1.event=a;return this};c.setEventOccurReason=function(a){this.$1.event_occur_reason=a;return this};c.setEventTarget=function(a){this.$1.event_target=a;return this};c.setEventTargetID=function(a){this.$1.event_target_id=a;return this};c.setEventTargetInfo=function(a){this.$1.event_target_info=a;return this};c.setEventTargetSubType=function(a){this.$1.event_target_sub_type=a;return this};c.setException=function(a){this.$1.exception=a;return this};c.setExceptionTrace=function(a){this.$1.exception_trace=a;return this};c.setExitPointType=function(a){this.$1.exit_point_type=a;return this};c.setExitPointValue=function(a){this.$1.exit_point_value=a;return this};c.setExpectedLanguage=function(a){this.$1.expected_language=a;return this};c.setFeedAggregationType=function(a){this.$1.feed_aggregation_type=a;return this};c.setFeedBadgeStatus=function(a){this.$1.feed_badge_status=a;return this};c.setFeedSource=function(a){this.$1.feed_source=a;return this};c.setFetchCount=function(a){this.$1.fetch_count=a;return this};c.setFetchCursor=function(a){this.$1.fetch_cursor=a;return this};c.setFetchReason=function(a){this.$1.fetch_reason=a;return this};c.setFirstN=function(a){this.$1.first_n=a;return this};c.setGeneratedUnitIds=function(a){this.$1.generated_unit_ids=a;return this};c.setGraphqlResult=function(a){this.$1.graphql_result=a;return this};c.setHasNextPage=function(a){this.$1.has_next_page=a;return this};c.setHasSocialContext=function(a){this.$1.has_social_context=a;return this};c.setHasTitle=function(a){this.$1.has_title=a;return this};c.setInitialRequest=function(a){this.$1.initial_request=a;return this};c.setIsAutoplayEnabled=function(a){this.$1.is_autoplay_enabled=a;return this};c.setIsColdStart=function(a){this.$1.is_cold_start=a;return this};c.setIsDialtone=function(a){this.$1.is_dialtone=a;return this};c.setIsFeedUnitVisible=function(a){this.$1.is_feed_unit_visible=a;return this};c.setIsFirstSessionStart=function(a){this.$1.is_first_session_start=a;return this};c.setIsFirstTti=function(a){this.$1.is_first_tti=a;return this};c.setIsPrepush=function(a){this.$1.is_prepush=a;return this};c.setIsVhShowsEnabledClient=function(a){this.$1.is_vh_shows_enabled_client=a;return this};c.setIsWarion=function(a){this.$1.is_warion=a;return this};c.setLastVisitTime=function(a){this.$1.last_visit_time=a;return this};c.setLaunchedByUser=function(a){this.$1.launched_by_user=a;return this};c.setLiveNowCount=function(a){this.$1.live_now_count=a;return this};c.setLoadingDataType=function(a){this.$1.loading_data_type=a;return this};c.setMismatchedLanguage=function(a){this.$1.mismatched_language=a;return this};c.setMismatchedLanguageVideoID=function(a){this.$1.mismatched_language_video_id=a;return this};c.setModuleClass=function(a){this.$1.module_class=a;return this};c.setNavigationChainKey=function(a){this.$1.navigation_chain_key=a;return this};c.setNewBadgeCount=function(a){this.$1.new_badge_count=a;return this};c.setNumberOfComponents=function(a){this.$1.number_of_components=a;return this};c.setNumberOfSection=function(a){this.$1.number_of_section=a;return this};c.setOldBadgeCount=function(a){this.$1.old_badge_count=a;return this};c.setOriginalEntryPointType=function(a){this.$1.original_entry_point_type=a;return this};c.setOriginalPigeonSessionID=function(a){this.$1.original_pigeon_session_id=a;return this};c.setOriginalTabSelectionType=function(a){this.$1.original_tab_selection_type=a;return this};c.setPerfLoggerDownloadBandwidth=function(a){this.$1.perf_logger_download_bandwidth=a;return this};c.setPerfLoggerStatus=function(a){this.$1.perf_logger_status=a;return this};c.setPerfTimeMs=function(a){this.$1.perf_time_ms=a;return this};c.setPhotoResultCount=function(a){this.$1.photo_result_count=a;return this};c.setPigeonSessionID=function(a){this.$1.pigeon_session_id=a;return this};c.setPlayerOrigin=function(a){this.$1.player_origin=a;return this};c.setPlayerSuborigin=function(a){this.$1.player_suborigin=a;return this};c.setPositionInAggregation=function(a){this.$1.position_in_aggregation=a;return this};c.setPositionInChannel=function(a){this.$1.position_in_channel=a;return this};c.setPositionInUnit=function(a){this.$1.position_in_unit=a;return this};c.setPrefetchEnabled=function(a){this.$1.prefetch_enabled=a;return this};c.setPrefetchUnitCount=function(a){this.$1.prefetch_unit_count=a;return this};c.setReactionChannelID=function(a){this.$1.reaction_channel_id=a;return this};c.setReactionFriendCount=function(a){this.$1.reaction_friend_count=a;return this};c.setReactionRequestType=function(a){this.$1.reaction_request_type=a;return this};c.setReactionType=function(a){this.$1.reaction_type=a;return this};c.setReactionUnitType=function(a){this.$1.reaction_unit_type=a;return this};c.setRenderedInHscrollCount=function(a){this.$1.rendered_in_hscroll_count=a;return this};c.setRequestIDForSection=function(a){this.$1.request_id_for_section=a;return this};c.setRequestStatus=function(a){this.$1.request_status=a;return this};c.setRequestedUnitIds=function(a){this.$1.requested_unit_ids=a;return this};c.setResultCount=function(a){this.$1.result_count=a;return this};c.setScrollPerfDuration=function(a){this.$1.scroll_perf_duration=a;return this};c.setScrollPerfLargeDrop=function(a){this.$1.scroll_perf_large_drop=a;return this};c.setScrollPerfSmallDrop=function(a){this.$1.scroll_perf_small_drop=a;return this};c.setSectionSubtype=function(a){this.$1.section_subtype=a;return this};c.setSectionVideoChannelType=function(a){this.$1.section_video_channel_type=a;return this};c.setSessionDuration=function(a){this.$1.session_duration=a;return this};c.setSessionID=function(a){this.$1.session_id=a;return this};c.setShouldShowPill=function(a){this.$1.should_show_pill=a;return this};c.setSocialContextInfo=function(a){this.$1.social_context_info=a;return this};c.setSocialContextType=function(a){this.$1.social_context_type=a;return this};c.setSourceModule=function(a){this.$1.source_module=a;return this};c.setStoryID=function(a){this.$1.story_id=a;return this};c.setStoryRenderLocation=function(a){this.$1.story_render_location=a;return this};c.setTabSelected=function(a){this.$1.tab_selected=a;return this};c.setTabSelectionType=function(a){this.$1.tab_selection_type=a;return this};c.setTabType=function(a){this.$1.tab_type=a;return this};c.setTimeIntervalSinceLastDownload=function(a){this.$1.time_interval_since_last_download=a;return this};c.setTimeSinceAppOpen=function(a){this.$1.time_since_app_open=a;return this};c.setTimeSinceBackgroundedMs=function(a){this.$1.time_since_backgrounded_ms=a;return this};c.setTimeSinceDataFetchS=function(a){this.$1.time_since_data_fetch_s=a;return this};c.setTimeSinceFullReload=function(a){this.$1.time_since_full_reload=a;return this};c.setTimeSincePrefetch=function(a){this.$1.time_since_prefetch=a;return this};c.setTimeSinceStart=function(a){this.$1.time_since_start=a;return this};c.setTopicSelected=function(a){this.$1.topic_selected=a;return this};c.setTrackingData=function(a){this.$1.tracking_data=a;return this};c.setTreatmentID=function(a){this.$1.treatment_id=a;return this};c.setTreatmentLaserTierName=function(a){this.$1.treatment_laser_tier_name=a;return this};c.setTtiType=function(a){this.$1.tti_type=a;return this};c.setUnitPosition=function(a){this.$1.unit_position=a;return this};c.setUnseenNotificationsCount=function(a){this.$1.unseen_notifications_count=a;return this};c.setUpdateReason=function(a){this.$1.update_reason=a;return this};c.setUpstreamPlayerSource=function(a){this.$1.upstream_player_source=a;return this};c.setValidResultCount=function(a){this.$1.valid_result_count=a;return this};c.setVideoIDOverrided=function(a){this.$1.video_id_overrided=a;return this};c.setVideoResultCount=function(a){this.$1.video_result_count=a;return this};c.setVideoSearchExperience=function(a){this.$1.video_search_experience=a;return this};c.setVideoWatchedCount=function(a){this.$1.video_watched_count=a;return this};c.setVisitationID=function(a){this.$1.visitation_id=a;return this};c.setWasBadged=function(a){this.$1.was_badged=a;return this};c.setWatchTimeInChannelsS=function(a){this.$1.watch_time_in_channels_s=a;return this};c.setWatchTimeInWatchAndScrollS=function(a){this.$1.watch_time_in_watch_and_scroll_s=a;return this};c.setWatchTimeInlineS=function(a){this.$1.watch_time_inline_s=a;return this};c.setWatchTimeOnFullScreenS=function(a){this.$1.watch_time_on_full_screen_s=a;return this};c.setWatchTimeOnTvS=function(a){this.$1.watch_time_on_tv_s=a;return this};c.setWatchTimeS=function(a){this.$1.watch_time_s=a;return this};c.setWatchTimeWithSoundOnS=function(a){this.$1.watch_time_with_sound_on_s=a;return this};c.setWillTriggerReload=function(a){this.$1.will_trigger_reload=a;return this};c.setWithFetchCursor=function(a){this.$1.with_fetch_cursor=a;return this};c.updateExtraData=function(a){a=b("nullthrows")(b("GeneratedLoggerUtils").serializeMap(a));b("GeneratedLoggerUtils").checkExtraDataFieldNames(a,g);this.$1=babelHelpers["extends"]({},this.$1,a);return this};c.addToExtraData=function(a,b){var c={};c[a]=b;return this.updateExtraData(c)};return a}();var g={apns_payload:!0,asynchronously_loaded_hscroll_content:!0,attribution_id:!0,audio_external:!0,audio_muted:!0,badge_check_interval:!0,badge_cooldown:!0,badge_count:!0,badge_ids:!0,badge_ranking_consumption_class:!0,badge_ranking_model_score:!0,badge_type:!0,boost_id:!0,broadcast_status_explicit:!0,cached_response_age:!0,campaign_id:!0,can_show_pill:!0,channel_id:!0,channel_position:!0,click_point:!0,click_target:!0,client_event_time:!0,connection_type:!0,creator_status:!0,csr_state_seen:!0,csr_story_source:!0,current_scroll_offset:!0,data_dirty_reason:!0,data_freshness:!0,data_prefetch_status:!0,data_source:!0,data_stale_interval:!0,deeplink_sender_id:!0,dest_module:!0,dest_module_class:!0,device_type:!0,device_year_class:!0,discover_cache_enabled:!0,duplicate_story_id:!0,duration:!0,eligible_for_hscroll_count:!0,entry_point_type:!0,entry_point_value:!0,error_user_info:!0,event:!0,event_occur_reason:!0,event_target:!0,event_target_id:!0,event_target_info:!0,event_target_sub_type:!0,exception:!0,exception_trace:!0,exit_point_type:!0,exit_point_value:!0,expected_language:!0,feed_aggregation_type:!0,feed_badge_status:!0,feed_source:!0,fetch_count:!0,fetch_cursor:!0,fetch_reason:!0,first_n:!0,generated_unit_ids:!0,graphql_result:!0,has_next_page:!0,has_social_context:!0,has_title:!0,initial_request:!0,is_autoplay_enabled:!0,is_cold_start:!0,is_dialtone:!0,is_feed_unit_visible:!0,is_first_session_start:!0,is_first_tti:!0,is_prepush:!0,is_vh_shows_enabled_client:!0,is_warion:!0,last_visit_time:!0,launched_by_user:!0,live_now_count:!0,loading_data_type:!0,mismatched_language:!0,mismatched_language_video_id:!0,module_class:!0,navigation_chain_key:!0,new_badge_count:!0,number_of_components:!0,number_of_section:!0,old_badge_count:!0,original_entry_point_type:!0,original_pigeon_session_id:!0,original_tab_selection_type:!0,perf_logger_download_bandwidth:!0,perf_logger_status:!0,perf_time_ms:!0,photo_result_count:!0,pigeon_session_id:!0,player_origin:!0,player_suborigin:!0,position_in_aggregation:!0,position_in_channel:!0,position_in_unit:!0,prefetch_enabled:!0,prefetch_unit_count:!0,reaction_channel_id:!0,reaction_friend_count:!0,reaction_request_type:!0,reaction_type:!0,reaction_unit_type:!0,rendered_in_hscroll_count:!0,request_id_for_section:!0,request_status:!0,requested_unit_ids:!0,result_count:!0,scroll_perf_duration:!0,scroll_perf_large_drop:!0,scroll_perf_small_drop:!0,section_subtype:!0,section_video_channel_type:!0,session_duration:!0,session_id:!0,should_show_pill:!0,social_context_info:!0,social_context_type:!0,source_module:!0,story_id:!0,story_render_location:!0,tab_selected:!0,tab_selection_type:!0,tab_type:!0,time_interval_since_last_download:!0,time_since_app_open:!0,time_since_backgrounded_ms:!0,time_since_data_fetch_s:!0,time_since_full_reload:!0,time_since_prefetch:!0,time_since_start:!0,topic_selected:!0,tracking_data:!0,treatment_id:!0,treatment_laser_tier_name:!0,tti_type:!0,unit_position:!0,unseen_notifications_count:!0,update_reason:!0,upstream_player_source:!0,valid_result_count:!0,video_id_overrided:!0,video_result_count:!0,video_search_experience:!0,video_watched_count:!0,visitation_id:!0,was_badged:!0,watch_time_in_channels_s:!0,watch_time_in_watch_and_scroll_s:!0,watch_time_inline_s:!0,watch_time_on_full_screen_s:!0,watch_time_on_tv_s:!0,watch_time_s:!0,watch_time_with_sound_on_s:!0,will_trigger_reload:!0,with_fetch_cursor:!0};e.exports=a}),null);
__d("VideoHomeFollowMutationLogger",["VideoHomeTypedLogger"],(function(a,b,c,d,e,f,g){"use strict";function a(a){var b=a.event,d=a.target,e=a.id;a=a.playerOrigin;a=a===void 0?"video_home":a;new(c("VideoHomeTypedLogger"))().setEvent(b).setEventTarget(d).setEventTargetID(e).setPlayerOrigin(a).log()}function b(a,b){var c=this;a.addEventListener("click",function(){c.logClick(b)})}g.logClick=a;g.init=b}),98);
__d("VideoActionLink.react",["cx","CenteredContainer.react","Image.react","Link.react","joinClasses","react"],(function(a,b,c,d,e,f,g,h){"use strict";var i=d("react");function a(a){var b="_2a_c";a.imageClass!=null&&(b=c("joinClasses")(b,a.imageClass));return i.jsxs(c("Link.react"),{className:"_2pi9",href:a.href,onClick:a.onClick,rel:a.rel,role:"button",children:[i.jsxs("div",{className:"_2a_3",children:[i.jsx("div",{className:"_2a_5"}),i.jsx("div",{className:b,children:i.jsx(c("Image.react"),{src:a.imageSrc,size:"24"})})]}),i.jsx("div",{className:"_63kv",children:i.jsx(c("CenteredContainer.react"),{horizontal:!1,fullHeight:!0,vertical:!0,children:a.text})})]})}a.displayName=a.name+" [from "+f.id+"]";g["default"]=a}),98);
__d("VideoReshareLink.react",["cx","fbt","ix","VideoActionLink.react","react"],(function(a,b,c,d,e,f,g,h,i,j){"use strict";var k=d("react");function a(a){return k.jsx(c("VideoActionLink.react"),{href:a.shareURI,imageClass:"_2a_f",imageSrc:j("115553"),rel:"dialog",text:i._("Chia s\u1ebb")})}a.displayName=a.name+" [from "+f.id+"]";g["default"]=a}),98);
__d("VideoWatchAgainLink.react",["cx","fbt","ix","VideoActionLink.react","react"],(function(a,b,c,d,e,f,g,h,i,j){"use strict";var k=d("react");a=function(a){babelHelpers.inheritsLoose(b,a);function b(){var b,c;for(var d=arguments.length,e=new Array(d),f=0;f<d;f++)e[f]=arguments[f];return(b=c=a.call.apply(a,[this].concat(e))||this,c.$1=function(){c.props.vpc.clickVideo()},b)||babelHelpers.assertThisInitialized(c)}var d=b.prototype;d.render=function(){return k.jsx(c("VideoActionLink.react"),{imageClass:"_2a_d",imageSrc:j("115481"),onClick:this.$1,text:i._("Xem l\u1ea1i")})};return b}(k.PureComponent);g["default"]=a}),98);
__d("EmbeddedVideoInitialInfoOverlay",["SubscriptionsHandler"],(function(a,b,c,d,e,f){a=function(a,c){"use strict";var d=this;this.$1=new(b("SubscriptionsHandler"))();this.$1.addSubscriptions(a.addListener("beginPlayback",function(){c.parentNode.removeChild(c),d.$1.release()}))};e.exports=a}),null);
__d("cssURL",[],(function(a,b,c,d,e,f){function a(a){return"url('"+a.replace(/[\ud800-\udfff].|[^-a-zA-Z0-9./_?]/g,function(a){return"\\"+a.codePointAt(0).toString(16)+" "})+"')"}f["default"]=a}),66);
__d("EncryptedImg",["EncryptedImgUtils","URI","XHRRequest","getCrossOriginTransport"],(function(a,b,c,d,e,f,g){var h=babelHelpers["extends"]({insertIntoStyleBackgroundImage:function(a,b){b=function(a,b){a&&(a.style.backgroundImage="url('"+b+"')")}.bind(void 0,b);h.load(a,b)},insertIntoDOM:function(a,b){b=function(a,b){a&&a.setAttribute("src",b)}.bind(void 0,b);h.load(a,b)},load:function(a,b,e){e===void 0&&(e=!0);a=new(c("URI"))(a);var f=d("EncryptedImgUtils").extractKey(a);f=i.bind(void 0,f,b,e);f.includeHeaders=!0;new(c("XHRRequest"))(a.toString()).setTransportBuilder(c("getCrossOriginTransport")).setMethod("GET").setResponseType("arraybuffer").setResponseHandler(f).send()},dataUrlPrefix:function(a,b){b===void 0&&(b=32);if(!a.startsWith("data:"))return a;var c=a.indexOf(",");(c<0||c>b)&&(c=b);return a.slice(0,c)}},d("EncryptedImgUtils"));a=h;function i(a,b,c,d,e){if(!a){b(l(d,k(e)));return}a=j(a);var f=new Uint8Array(d);d=f.subarray(2,14);f=f.subarray(14,f.length);var g={name:"AES-GCM",iv:d,tagLength:128};window.crypto.subtle.importKey("raw",a,g,!1,["encrypt","decrypt"]).then(function(a){return window.crypto.subtle.decrypt(g,a,f)}).then(function(a){c?b(l(a,k(e))):b(a)})["catch"](function(){})}function j(a){if(typeof a==="string"){var b=new Uint8Array(Math.floor(a.length/2)),c=0;a.replace(/(..)/g,function(a){b[c++]=parseInt(a,16)});return b}return null}function k(a){var b="image/jpeg";a=a.toLowerCase().match(/content-type:\s?([\w\/]*)\s/);a&&a.length>1&&(b=a[1]);return b}function l(a,b){a=new Uint8Array(a);var c="";for(var d=0,e=a.byteLength;d<e;++d)c+=String.fromCharCode(a[d]);return"data:"+b+";base64,"+window.btoa(c)}g["default"]=a}),98);
__d("CssBackgroundImage.react",["EncryptedImg","createCancelableFunction","cssURL","react"],(function(a,b,c,d,e,f,g){var h=d("react");a=function(a){babelHelpers.inheritsLoose(b,a);function b(){var b,c;for(var d=arguments.length,e=new Array(d),f=0;f<d;f++)e[f]=arguments[f];return(b=c=a.call.apply(a,[this].concat(e))||this,c.state={image:"data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACwAAAAAAQABAAACAkQBADs="},b)||babelHelpers.assertThisInitialized(c)}var d=b.prototype;d.$2=function(a){var b=this;this.$1&&this.$1.cancel();this.$1=c("createCancelableFunction")(function(c){a===b.props.imageURI&&b.setState({image:c})});c("EncryptedImg").load(a,this.$1)};b.getDerivedStateFromProps=function(a){a=a.imageURI;return a!=null&&!c("EncryptedImg").isEncrypted(a)?{image:a}:null};d.componentDidMount=function(){var a=this.props.imageURI;a!=null&&c("EncryptedImg").isEncrypted(a)&&this.$2(a)};d.componentDidUpdate=function(a){var b=this.props.imageURI;b!==a.imageURI&&b!=null&&c("EncryptedImg").isEncrypted(b)&&this.$2(b)};d.componentWillUnmount=function(){this.$1&&this.$1.cancel()};d.render=function(){var a=this.props;a.imageURI;var b=a.backgroundPosition,d=a.height,e=a.width,f=a.style;a=babelHelpers.objectWithoutPropertiesLoose(a,["imageURI","backgroundPosition","height","width","style"]);return h.jsx("div",babelHelpers["extends"]({style:babelHelpers["extends"]({},f,{backgroundImage:c("cssURL")(this.state.image),backgroundPosition:b||f.backgroundPosition,height:d||f.height,width:e||f.width})},a))};return b}(h.Component);a.defaultProps={backgroundPosition:"0% 0%",style:{}};g["default"]=a}),98);
__d("objectKeys",[],(function(a,b,c,d,e,f){function a(a){return Object.keys(a)}e.exports=a}),null);
__d("VideoHomeEvents",[],(function(a,b,c,d,e,f){a=Object.freeze({SESSION_PREFETCH:"session_prefetch",SESSION_START:"session_start",SESSION_PAUSE:"session_pause",SESSION_RESUME:"session_resume",SESSION_END:"session_end",FOLLOW:"follow",UNFOLLOW:"unfollow",SUBSCRIBE:"subscribe",SUBSCRIBE_SOME:"subscribe_some",UNSUBSCRIBE:"unsubscribe",PIN_TOPIC:"pin_topic",UNPIN_TOPIC:"unpin_topic",MARK_VISIT:"mark_visit",MARK_VISIT_WITH_BADGE:"mark_visit_with_badge",MARK_VISIT_WATCHLIST:"mark_visit_watchlist",MARK_SESSION_END:"mark_session_end",MARK_FEED_SESSION_END:"mark_feed_session_end",SECTION_PAGINATION_ERROR:"section_pagination_error",AFTER_PARTY_REACT:"after_party_react",AFTER_PARTY_IMPRESSION:"after_party_impression",SAW_SUPER_BADGE:"saw_super_badge",ENABLE_WATCHLIST_NOTIF:"enable_watchlist_notif",DISABLE_WATCHLIST_NOTIF:"disable_watchlist_notif",VISIT_WATCHLIST_SETTING:"visit_watchlist_setting",VISIT_WATCHLIST_ADD_PAGES:"visit_watchlist_add_pages",VISIT_WATCHLIST_MANAGE:"visit_watchlist_manage",VISIT_WATCH_MANAGE:"visit_watch_manage",UNHIDE_ALL_IN_WATCHLIST:"unhide_all_in_watchlist",UNHIDE_PAGE_IN_WATCHLIST:"unhide_page_in_watchlist",HIDE_ALL_IN_WATCHLIST:"hide_all_in_watchlist",HIDE_PAGE_IN_WATCHLIST:"hide_page_in_watchlist",OPTED_OUT_WATCHLIST_BUSINESS_PAGES:"opted_out_watchlist_business_pages",OPTED_OUT_BUSINESS_PAGE_ON_FOLLOW:"opted_out_business_page_on_follow",FEED_PAGE_VISIT:"feed_page_visit",LIVE_REMINDER:"live_reminder",HIDE:"hide",SEE_MORE:"see_more",SEE_LESS:"see_less",SEE_MORE_FAIL:"see_more_fail",SEE_LESS_FAIL:"see_less_fail",UNDO_SEE_MORE:"undo_see_more",UNDO_SEE_LESS:"undo_see_less",UNDO_SEE_MORE_FAIL:"undo_see_more_fail",UNDO_SEE_LESS_FAIL:"undo_see_less_fail",DISPLAY_BADGE_ON_TAB:"display_badge_on_tab",VIDEO_DELETED:"video_deleted",VIDEO_STATUS_CHANGED:"video_status_changed",NAVIGATION:"navigation",OPEN_DIVEBAR:"open_divebar",CONTENT:"content",PULL_TO_REFRESH:"pull_to_refresh",HANDLING_APNS:"handling_apns",AUDIO_STATE:"audio_state",BADGE_FETCHED:"badge_fetched",METADATA_FETCHED:"metadata_fetched",DATA_PREFETCH:"data_prefetch",UNIT_PREFETCH:"unit_prefetch",GRAPHQL_BADGE_UPDATE_SUBSCRIPTION:"graphql_badge_update_subscription",BADGE_COUNT_FETCH_ON_BADGE_PUSH:"badge_count_fetch_on_badge_push",EMPTY_UNIT:"empty_unit",EMPTY_PAGINATION:"empty_pagination",INVALID_UNIT:"invalid_unit",INVALID_CHANNEL_TYPE:"invalid_channel_type",NO_ITEMS_WITH_HAS_NEXT_PAGE:"no_items_with_has_next_page",SKIPPED_NOT_LIVE_IMPRESSION:"skipped_not_live_impression",COLLAPSED_IMPRESSION:"collapsed_impression",COLLAPSED_NO_VIDEO:"collapsed_no_video",SKIPPED_MF_LIVE_MISMATCH_IMPRESSION:"skipped_mf_live_mismatch_impression",COLLAPSED_WAS_LIVE_LIMIT_IMPRESSION:"collapsed_was_live_limit_impression",IMPRESSION:"impression",VPV:"vpv",VPVD:"vpvd",VPV_DURATION:"vpv_duration",CLICK:"click",SWIPE:"swipe",SESSION_SUMMARY:"session_summary",WATCH_SUMMARY:"watch_summary",WATCHLIST_LOAD:"watchlist_load",UNFOLLOWED_WATCHLIST_LOAD:"unfollowed_watchlist_load",DUPLICATE:"duplicate",BACKGROUNDED:"backgrounded",FOREGROUNDED:"foregrounded",END_SCREEN_DISPLAYED:"end_screen_displayed",END_OF_DATA:"end_of_data",END_OF_SECTION:"end_of_section",MARK_DATA_DIRTY:"mark_data_dirty",TAB:"tab",TOPIC_SELECTED:"topic_selected",REDIRECT:"redirect",LOAD_LOADING_CARD_VIEW:"load_loading_card_view",LOAD_ITEMS_LOADING_CARD_VIEW:"load_items_loading_card_view",TTI:"tti",TTI_REALDATA:"tti_realdata",E2E:"e2e",LOAD_SECTION:"load_section",LOAD_ITEMS:"load_items",MULTI_MEDIA_CHAINING_PAGE_LOAD:"multi_media_chaining_page_load",REACTION_FETCH_UNITS:"reaction_fetch_units",REACTION_UNIT_ID_MEMCACHE_HIT:"reaction_unit_id_memcache_hit",REACTION_UNIT_ID_MEMCACHE_MISS:"reaction_unit_id_memcache_miss",VIDEO_JEWEL_IMPRESSION:"video_jewel_impression",SCROLL_PERF:"scroll_perf",SCROLL_PERF_HSCROLL:"scroll_perf_hscroll",APPENDED_HSCROLL_STORIES:"appended_hscroll_stories",LOAD_UNIT_ATTEMPT:"load_unit_attempt",UNIT_STORY_EXCEPTION:"unit_story_exception",COMPONENT_GENERATION_EXCEPTION:"component_generation_exception",BADGE_SENT:"badge_sent",VIDEO_TAB_SELECTED:"video_tab_selected",BADGE_UPDATE:"badge_update",BOOKMARK_BADGE_IMPRESSION:"bookmark_badge_impression",BADGE_COUNT_GENERATED:"badge_count_generated",BADGE_COUNT_NOT_RENDERED:"badge_count_not_rendered",BADGE_ID_GENERATED:"badge_id_generated",BADGE_TYPE_NOT_RENDERED:"badge_type_not_rendered",VIDEO_STORY_GENERATED:"video_story_generated",EMPTY_FEED_AFTER_FALLBACK:"empty_feed_after_fallback",NO_VIDEO_STORY_GENERATED:"no_video_story_generated",INVALID_QUERY_END_TIMESTAMP:"invalid_query_end_timestamp",BADGE_STORIES_COUNT:"badge_stories_count",BADGE_PREDICTION_RANKED:"badge_prediction_ranked",BADGE_COOLDOWN_RANKED:"badge_cooldown_ranked",BADGE_EXPLORATION_CACHE_RETURN:"badge_exploration_cache_return",BADGE_EXPLORATION_CACHE_SET:"badge_exploration_cache_set",CAMPAIGN_GOAL_ACHIEVED:"campaign_goal_achieved",USER_TARGETED_BY_BOOST:"user_targeted_by_boost",USER_TARGETED_BY_CAMPAIGN:"user_targeted_by_campaign",CAMPAIGN_STARTED:"campaign_started",CAMPAIGN_EXPIRED:"campaign_expired",AGGREGATION_SECTION_COMPONENT_NULL:"aggregation_section_component_null",AGGREGATION_INELIGIBLE:"aggregation_ineligible",HSCROLL_NUM_FETCHED:"hscroll_num_fetched",PIVOT_USECASE_ELIGIBLE:"pivot_usecase_eligible",PIVOT_USECASE_INELIGIBLE:"pivot_usecase_ineligible",PIVOT_NOT_RENDERED:"pivot_not_rendered",PIVOT_AUTO_DISMISSED:"pivot_auto_dismissed",SOCIAL_GLYPH_IMPRESSION:"social_glyph_impression",RHC_IMPRESSION:"rhc_impression",SHOW_VIDEO_END_SCREEN_IMPRESSION:"show_video_end_screen_impression",SHOW_EPISODE_MASKED_IMPRESSION:"show_episode_masked_impression",SHOW_EPISODE_CONTINUE_WATCHING_IMPRESSION:"show_episode_continue_watching_impression",SHOW_EPISODE_CLICK_TO_WATCH_IMPRESSION:"show_episode_click_to_watch_impression",VIDEO_HOVERCARD_IMPRESSION:"video_hovercard_impression",PARENT_PAGE_VIDEO_END_SCREEN_IMPRESSION:"parent_page_video_end_screen_impression",SOCIAL_CONTEXT_IMPRESSION:"social_context_impression",GAMING_VERTICAL_IMPRESSION:"gaming_vertical_impression",WATCHLIST_CONTROLS_IMPRESSION:"watchlist_controls_impression",SUBSCRIPTIONS_CONTROLS_IMPRESSION:"subscriptions_controls_impression",TAHOE_TOP_BANNER_WATCH_ENTRY_POINT_IMPRESSION:"tahoe_top_banner_watch_entry_point_impression",INLINE_END_SCREEN_IMPRESSION:"inline_end_screen_impression",EMBEDDED_END_SCREEN_IMPRESSION:"embedded_end_screen_impression",TAHOE_ENDSCREEN_WATCH_ENTRY_POINT_IMPRESSION:"tahoe_endscreen_watch_entry_point_impression",TAHOE_UP_NEXT_VIDEO_WATCH_ENTRY_POINT_IMPRESSION:"tahoe_up_next_video_watch_entry_point_impression",TAHOE_SEARCH_BAR_WITH_WATCH_LOGO_IMPRESSION:"tahoe_search_bar_with_watch_logo_impression",PAUSE_SCREEN_IMPRESSION:"pause_screen_impression",EMBEDDED_LIVE_VIDEO_PROMPT_IMPRESSION:"embedded_live_video_prompt_impression",LIVE_PROMPT_IMPRESSION:"live_prompt_impression",TAHOE_END_CARD_AGGREGATION_IMPRESSION:"tahoe_end_card_aggregation_impression",TAHOE_END_CARD_AGGREGATION_FETCH:"tahoe_end_card_aggregation_fetch",SOCIAL_RESHARED_VIDEO_GENERATION_ATTEMPT:"social_reshared_video_generation_attempt",SOCIAL_RESHARED_STORY_GENERATED:"social_reshared_story_generated",POPULAR_WITH_FRIENDS_GENERATION:"popular_with_friends_generation",VIDEO_HOME_DISCOVER_FETCH_COMPLETE:"video_home_discover_fetch_complete",LONG_PRESS_MENU:"long_press_menu",INTERSTITIAL_SEEN:"interstitial_seen",WWW_FEED_INJECTION:"www_feed_injection",WWW_FEED_WNS_IMPRESSION:"www_feed_wns_impression",WWW_USER_FAILS_COB:"www_user_fails_cob",WWW_USER_PASSES_COB:"www_user_passes_cob",PAGE_LOAD:"page_load",AUTO_SCROLL:"auto_scroll",FEED_IMPRESSION:"feed_impression",FEED_PERMALINK_ELIGIBLE:"feed_permalink_eligible",FEED_PERMALINK_NOT_ELIGIBLE:"feed_permalink_not_eligible",FEED_PERMALINK_REDIRECT:"feed_permalink_redirect",FEED_WITH_VIDEO_ID:"feed_with_video_id",FEED_WITH_VIDEO:"feed_with_video",FEED_UNIT_LOADED:"feed_unit_loaded",FEED_UNIT_VIDEO_LOADED:"feed_unit_video_loaded",FEED_UNIT_VIDEO_DISPLAYED:"feed_unit_video_displayed",FEED_UNIT_VIDEO_PLAY:"feed_unit_video_play",LIVE_INJECT_FROM_FEED:"live_inject_from_feed",LIVE_INJECT_FROM_PERMALINK:"live_inject_from_permalink",VPC_LOADED:"vpv_loaded",AUTOPLAY_REGISTERED:"autoplay_registered",JS_ERROR:"js_error",WWW_LIVE_HERO_UP_NEXT_CHAIN:"www_live_hero_up_next_chain",WWW_PERMALINK_VISIT:"www_permalink_visit",WWW_LOE_PERMALINK_VISIT:"www_loe_permalink_visit",WWW_LOE_TRANSCRIPT_GATING:"www_loe_transcript_gating",WWW_COPY_LINK:"www_copy_link",WWW_LIVE_SIMILAR_DUPES:"www_live_similar_dupes",WWW_LIVE_WNS_IMPRESSION:"www_live_wns_impression",VIDEO_END_CARD_FETCH:"video_end_card_fetch",VIDEO_PAUSE_CARD_FETCH:"video_pause_card_fetch",AUTOPLAY_SETTINGS_PROMPT_IMPRESSION:"autoplay_settings_prompt_impression",AUTOPLAY_TOGGLE_ON:"autoplay_toggle_on",AUTOPLAY_TOGGLE_OFF:"autoplay_toggle_off",NOTIFICATIONS_BADGE_LOAD:"notifications_badge_load",UPDATES_SURFACE_CLICK:"updates_surface_click",WWW_LATEST_PAGINATION:"www_latest_pagination",WWW_QP_NULL_SECTION:"www_qp_null_section",WWW_QP_INSUFFICIENT_VIDEOS:"www_qp_insufficient_videos",WWW_QP_DATA_IMPL:"www_qp_data_impl",WWW_QP_SCROLL_UNIT_IMPRESSION:"www_qp_scroll_unit_impression",WWW_QP_SCROLL_UNIT_CLICK:"www_qp_scroll_unit_click",WWW_QP_MOBILE_WHALES_IMPRESSION:"www_qp_mobile_whales_impression",WWW_QP_NOSTALGIA_IMPRESSION:"www_qp_nostalgia_impression",WWW_QP_RAINBOW_IMPRESSION:"www_qp_rainbow_impression",WWW_QP_WATCHLIST_PAGE_IMPRESSION:"www_qp_watchlist_page_impression",FEED_AUTO_ADVANCE:"feed_auto_advance",WATCH_AND_SCROLL_END_SCREEN_IMPRESSION:"watch_and_scroll_end_screen_impression",WATCH_AND_SCROLL_CHAINING_CLICK_ADVANCE:"watch_and_scroll_chaining_click_advance",WATCH_AND_SCROLL_CHAINING_AUTO_ADVANCE:"watch_and_scroll_chaining_auto_advance",WATCH_AND_SCROLL_CHAINING_QUERY_EMPTY:"watch_and_scroll_chaining_query_empty",WATCH_AND_SCROLL_SKIP_OVERLAY_IMPRESSION:"watch_and_scroll_skip_overlay_impression",WATCH_AND_SCROLL_TRIGGER:"watch_and_scroll_trigger",WATCH_AND_SCROLL_END_SESSION:"watch_and_scroll_end_session",MSITE_FEED_AUTO_ADVANCE:"msite_feed_auto_advance",MSITE_FEED_ALTERNATIVE_HEIGHT_AUTO_ADVANCE:"msite_feed_alternative_height_auto_advance",MSITE_FEED_ALTERNATIVE_RECT_AUTO_ADVANCE:"msite_feed_alternative_rect_auto_advance",MSITE_FEED_FAILED_AUTO_ADVANCE:"msite_feed_failed_auto_advance",MSITE_END_SCREEN_IMPRESSION:"msite_end_screen_impression",MSITE_NUM_CHARACTERS_LINES:"msite_num_characters_lines",LOGGED_OUT_MSITE_COMMENT_MODAL_IMPRESSION:"logged_out_msite_comment_modal_impression",LOGGED_OUT_MSITE_AGGREGATION_PAGE_IMPRESSION:"logged_out_msite_aggregation_page_impression",EXCEPTION:"exception",FBLITE_RELATED_VIDEOS_QUERY_EXCEPTION:"fblite_related_videos_query_exception",FBLITE_CHANNELS_OTHERS:"fblite_channels_others",LOAD_LOGGED_OUT_MSITE_CTA_FOOTER:"load_logged_out_msite_cta_footer",VIDEO_FROM_STORY_OPTIMIZATION_MISS:"video_from_story_optimization_miss"});f["default"]=a}),66);
__d("QPLAddBlueRequestHeaders",["Arbiter","QuickPerformanceLogger"],(function(a,b,c,d,e,f,g){"use strict";function a(){c("Arbiter").subscribe("AsyncRequest/will_send",function(a,b){a=b.request;b=c("QuickPerformanceLogger").getActiveMarkerIds({type:2});b.length>0&&a.setRequestHeader("X-FB-QPL-Active-Flows",b.sort().join(","))})}g["default"]=a}),98);
__d("VideoHomeClickLogger",["VideoHomeEvents","VideoHomeTypedLogger"],(function(a,b,c,d,e,f,g){"use strict";function h(a){var b=a.target,d=a.id,e=a.clickPoint,f=a.playerOrigin;f=f===void 0?"video_home":f;a=a.eventTargetInfo;a=a===void 0?null:a;new(c("VideoHomeTypedLogger"))().setEvent(c("VideoHomeEvents").CLICK).setEventTarget(b).setEventTargetID(d).setClickPoint(e).setPlayerOrigin(f).setEventTargetInfo(a).log()}function a(a,b){a.addEventListener("click",function(){h(b)})}g.logClick=h;g.init=a}),98);