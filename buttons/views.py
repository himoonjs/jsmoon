from django.shortcuts import render


def buttons_home_page(request):
    return render(request, 'buttons/buttons_home.html')