require('./bootstrap');

import VueChatScroll from 'vue-chat-scroll';
import VueTimeago from 'vue-timeago';

Vue.use(VueChatScroll);
Vue.component('chat-room', require('./components/laravel-video-chat/ChatRoom.vue'));
Vue.component('group-chat-room', require('./components/laravel-video-chat/GroupChatRoom.vue'));
Vue.component('video-section', require('./components/laravel-video-chat/VideoSection.vue'));
//Vue.component('file_preview', require('./components/laravel-video-chat/FilePreview.vue'));

Vue.use(VueTimeago, {
    name: 'timeago', // component name, `timeago` by default
    locale: 'en-US'
    //locales: {
    //    'en-US': require('vue-timeago/locales/en-US.json')
    //}
})
