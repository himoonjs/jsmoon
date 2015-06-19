from django.shortcuts import render


def home_page(request):
    return render(request, 'homepage/home.html')

def lettertolamia_page(request):
    return render(request, 'homepage/lettertolamia.html')

