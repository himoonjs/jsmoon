from django.shortcuts import render


def home_page(request):
    return render(request, 'homepage/home.html')


def lettertolamia_page(request):
    return render(request, 'homepage/lettertolamia.html')


def lettertofraktio_page(request):
    return render(request, 'homepage/lettertofraktio.html')


def lettertoanders_page(request):
    return render(request, 'homepage/lettertoanders.html')


def lettertosolidangle_page(request):
    return render(request, 'homepage/lettertosolidangle.html')


def lettertogreatapes_page(request):
    return render(request, 'homepage/lettertogreatapes.html')


def lettertocontrast_page(request):
    return render(request, 'homepage/lettertocontrast.html')


def lettertoreaktor_page(request):
    return render(request, 'homepage/lettertoreaktor.html')


def lettertoisobar_page(request):
    return render(request, 'homepage/lettertoisobar.html')


def lettertofuturice_page(request):
    return render(request, 'homepage/lettertofuturice.html')


def lettertokorpimedia_page(request):
    return render(request, 'homepage/lettertokorpimedia.html')


def lettertoluotta_page(request):
    return render(request, 'homepage/lettertoluotta.html')
