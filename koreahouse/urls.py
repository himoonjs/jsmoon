from django.conf.urls import patterns, include, url
from django.contrib import admin

urlpatterns = patterns('',
    url(r'^$', 'koreahouse.views.koreahouse_home_page', name='koreahouse_home'),
    url(r'^info/', 'koreahouse.views.koreahouse_info_page', name='koreahouse_info'),
    url(r'^menu/', 'koreahouse.views.koreahouse_menu_page', name='koreahouse_menu'),
    # url(r'^blog/', include('blog.urls')),
    #url(r'^admin/', include(admin.site.urls)),
)
