<!DOCTYPE html>

<html lang="pt-br">
<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Front-end Project</title>

	<meta name="author" content="Alta Comunicazione">
	<meta name="description" content="{{ (isset($page)) ? $page->seo_description : '' }}">
	<meta name="keywords" content="{{ (isset($page)) ? $page->seo_keywords : '' }}">
	<meta name="robots" content="{{ (isset($page)) ? $page->seo_robots : '' }}">

	<meta property="og:site_name" content="">
	<meta property="og:type" content="website">
	<meta property="og:url" content="{{ config('custom.front_url') }}">
	<meta property="og:image" content="{{ (isset($page)) ? 'upload/pages/'.$page->image : 'assets/images/logo.png' }}">
	<meta property="og:image:url" content="{{ (isset($page)) ? 'upload/pages/'.$page->image : 'assets/images/logo.png' }}">
	<meta property="og:locale" content="pt_BR">
	<meta property="og:title" content="{{ (isset($page)) ? $page->seo_title : '' }}">
	<meta property="og:description" content="{{ (isset($page)) ? $page->seo_description : '' }}">

	<link rel="canonical" href="{{ config('custom.front_url') }}">

	<?php // @yield('styles'); ?>
	<link rel="stylesheet" href="assets/css/style.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link href="assets/images/icon.png" rel="shortcut icon" type="image/png">	

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>

<div class="policy-alert d-none">
	<div class="container">
		Este site salva seu histórico de uso. Ao continuar navegando você concorda com a política de <a href="privacy.php">cookies</a> e <a href="privacy.php">privacidade</a>.

		<button type="button" class="policy-accept btn btn-secondary" data-accept-url="" data-language="pt-br">
			Aceito os termos
		</button>
	</div>
</div>

<div class="welcome-alert">
    <div class="content">
		<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKQAAACWCAYAAABQByPnAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA+tpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTQ1IDc5LjE2MzQ5OSwgMjAxOC8wOC8xMy0xNjo0MDoyMiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczpkYz0iaHR0cDovL3B1cmwub3JnL2RjL2VsZW1lbnRzLzEuMS8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgMjAxOSAoV2luZG93cykiIHhtcDpDcmVhdGVEYXRlPSIyMDIwLTA5LTI0VDExOjQ2OjQwLTAzOjAwIiB4bXA6TW9kaWZ5RGF0ZT0iMjAyMC0wOS0yNFQxNDo0MDozOC0wMzowMCIgeG1wOk1ldGFkYXRhRGF0ZT0iMjAyMC0wOS0yNFQxNDo0MDozOC0wMzowMCIgZGM6Zm9ybWF0PSJpbWFnZS9wbmciIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MEVEOENCOTZGRThEMTFFQTlCNENDNTlBQ0RCOUJGNjQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MEVEOENCOTdGRThEMTFFQTlCNENDNTlBQ0RCOUJGNjQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDowRUQ4Q0I5NEZFOEQxMUVBOUI0Q0M1OUFDREI5QkY2NCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDowRUQ4Q0I5NUZFOEQxMUVBOUI0Q0M1OUFDREI5QkY2NCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Psl1PewAABUpSURBVHja7F0JtBTFFX3/I4pCQFABISLiBuK+objhhguIuxLigtG4RBQ3BHGDICCCIEqMxGNEzCZGUdw9ifu+oaKCiooiYEBFQVmM8lOXft80NTX9amb6/+nuefecd/459at6eqrfVL/9VU195ShSeKGRoT0MdTW0vaGtDbUx1DI0Z5WhhYbmG5pl6G1Dzxl6xdB/dQtlrKVbEIm1DfU09GtDhxhqLMyvNtSaaWdDfXh8iaFHDE029Jihn3Rr82+gIhdNDQ029Kmhewwd48GM0vVONPSQoY8NXWBoXd1mZUgJDQydy0wznE+6uNHO0DhDsw2daqhKt10Z0oVOhl4yNMHQBvXweZA/Jxl6wtCmuv3KkGHgpHrN0K5l+Oxuht4ypNqlMuTq1+VoPqnWK+N9NDM01dAg1bIrmxlvNXR6Cdf4wtAiQ4v5x70+BWaglkVebyRfY5AyZOXhpiKYca6huw09bugNZkYXoAztYuhQQ8ca2riAzxhoaKWhq/WVXTkYwNq0L542dCArHxdTYEtcJJycMPGcZ+iXhnoYermAz7vK0GnKkJWBAwxd6zn3fUMHseIBbbimiM+D9+ZhCrw8vSiwbfrgFgqM68qQGQbMOXd6fu+JhnY09O8YP/8BQ9sZustjLrxEfy+zsqUMWceARt3G40Q739DZhlbUwT0sNdSbX8sStjI0RJWabGIvT7kMis4kYU4HQ3uz4rKJoeb8Ol/Mr+TXDT1JQZBFPgwztJx/JFG40NAdht5VhszWm2C8x7zLI5gRe3USn5xdPK4FBn3e0B8MTeGT18YYPrEvFJ7RWAqCO/SVnRGcwqdZFB6kwA7oQg9WcG73ZEagik9RyIEzDO0TofG/IFyru6EjlCGzgV94aNXf8Ku6xqFYTGRm7VDCPWxDgelolGPPf+IfjCSvXs/3owyZciCMrJXHnIXWWGPWis+M6T5wYl7KGrbNWB9FnM612NJQP2XIdKODIJ8B71DgQgyjAct93evgno4zdBvlhp1BuZkrrIX3pqUyZHoBpWEdYU5/Qz9aY9cZOrwO7wvK0UBrbDnLk1Foytq5MmQK0c3Q0cKc+ynwwITR1eNUjQNDDW1rjU1hzTwKZxjaQRkyXcArVzLz/GDoEmsMJpY/Uf1EcUOO/KP1WTV8YtcIz2y8MmS6gFNke2HODRSkEYRxlqHO9XifMAudYI3BqD5JWLcfBXk+mUNVBtNgEez6oaGNIuYsZK11SWisOTNoi3q+X3h2OrEMWYvW/B2aRKybw+tWZOnhZfGEvFpgRmCwxYy1Ml2LMtzvpg5lBuFr1wjr2teTrKsnZAlAMALMOA0j5kynIHcm7MrDSTODZc9yYBnf+7zQGKwDMw1tFrHuOz7pv9ATMpm4XmBG4ALK9SuPKyMzAggxs71JKx1Kl40m5B/bqQxZz0DwQU9hDswqz1hjPSgZgQuwTe5hjd1LQdRQFE6h8mRLKkNGoDYiJgoQ/m1jdEOPdfUJaP5VHif6GmIXBWagKmXI5OAcCgIYpNf5HGusH8tuSUEXPinDQMGqW4V1MOb3VqUmGYBmDHNN84g585nxvg+NQROHaaVZwr5PsfcKPzgqsi3XE7K8GCowI3CZ9YCB3yeQGYE2DtFiEd9vFBC5fqmekOUFvCpvCRoy0k/3pDXdcfDiTE/wDxLybidLxICrcYYgYizn/3+uJ2R5MJZkc80FlOsbviHh3x3FUUdZY/C9XySsW9exThmyngATjxSv+DcKKpqFgVfC/in4fvBx22kPKD7wuLCuDys5ypD1iLVJNtcsc8hU61CyzDwSxjueEU58qQKvy3ykDFmHgLlmS2EOXl3zHA9zsxR9z50M9bXG4E68WVi3m6GTVampH7RkE0jTiDmfGepIuRE0H1CQ9JUmuCKTfExdC1jB+U5PyLrFMIEZiV/Vtj1uRAqZsfYHeLk19rWhK4V1qLh2mZ6QdQsfc83zrAyENWsUbXqN0uteg4YNM9DHoTG4S2HyivJQreD/f5KWL5q2yhU3CszoSgGoK18vmASBDy+zrIrrwzgNm+e+Me9trRIXPj2QmIZ4yMci1sF8hIS145Uh4wdC9vcT5kyiIAXANp/sHeN9rOCHPJ5fnS4gD/wSVqLi2uMjKSglGE5KgwkIueNRVS2O4x/IM/rKjg/4pb9HhQerrstaaVxdDtCd62j+6wOUb5nKJ2ccmMHiRzht1yco+U2+l1Wq1MSDC0k211xDuZHTA2Jmxn0LYEbi0xpG6rhceagt+Vtr7AOSsxBR5/L0NDzoNJyQPglPn7DQvzI01pYfVhwFP5fzyTSryPW7U1BQKo6o9C/5TfBNaKzYxDY9IYvASIEZieW1ldbYtRRf9dnrSmBGAM03b47pXjak3IL435JsBmrpMUdPSAG78sOM0pCfZGE/DKQCvBjTPYDRYdNbXOJ10FJuTkzaPmRIVL143zpc0BkiqqoFOtLCDDRbT8gifiwk+2RXsSbrWhcXHouBGQF4j16O6Z5cKRuuvbABxWeMvrKLA0Ly9xLmILT/bWsMKQBdYryPV2K81ksxXgvFsA6zxp6ioHttFGA+OlgZsjD4xPW55KbGFH9a6LwYr/VZzPc2lnLtnAMc8rTPOmXICMAXLdnuENJvNy9CS7Y2Md/LNzFeqybme0MAye8cFodxwjrIn2cqQ/oBna8GCnNgzplgjbUnObE+i0BOkd1OGYEkC4R1CFJprgwpYxS/sqOAUP4fHOsaVSBDrk+5CWDohTNYWIcQtquVIaOBwIQ+whz4bx+yxhDdcwJVLs6i3OKnkymIcIoCAp07KUO6URuVE4WfHKaNTBfw9EQDh9wIM1B/j3VjlSHdQMj9bsIceDtmWmN9KQj1r3SgSWgvawzuyn8I69BC+TBlyDXhU8ULoV5DrDFEjo9UXvwZrl42UBClahZwJDRUhvw/EGovNTm/inLjDxHa31L58Gds4XhNw/Z5nbAOIWznKkMGaE9yAjxiISdaYx1IdpVVIq5w/EjBkJKB36fycEUwJBoGSeYaxEPavWTGUgW0WisCEGOGW2PIUZd64LjMRxXHkAh4PU6YgxB9u1oDonuOVN7LCwTj7miNQbmRIqAQ/LtdpTKkj7kG4VKuXjI3KM9FwmVCqyF3naMwGpR7b6sT9iu2gU39IGm/4pQAbx872xCRS5OFdXj7HFVpDAk5R2p7scgxJxFyTopwnUM+h0vxe2GdT4/ITDGkSxO0gdCybx2a4IbKZyVZMFChd4SwbvNyWTDKwZBbeHxZVGSw62qjXHE/5bGCgROxjcNCMUdYBxtvq0pgSLwOiuklk9ig0oSjseNERLEDqfwz6iANzzpDInReMtcgBP8pawy+1sOVt4rGqRSk4oZxt6GnhXW/oSD9N5MM6dNLBqH3A4pYp5CRrwdOlBko7oS5RDEkQua3FeYghMqu1IUQ/Y7KTyUDsaZ2LxuUWLlNWIdY0xOzxpAIlR8mzFngkHUQmj9UeSk2wE27nkN5kapZ+ETxp4ohYa6RWv9CG1xqjcHmuL7yUWxo61BmUGJFsgmjPtJFWWFIhMhLoU0Itbc9CHi9n6U8FDvAkO2sMXjEZnscGG2zwJA+5hrE8CWtZXBW4cp5R8LcxcI6vOpHpp0hYa45VJiDKJQXrDGE4h+kvFNngHJj97KZZuhfwjqkmXRJK0M29DAZLHfIND49aBSlw9UDB3GnP3msq0ojQ0JulFr/wvk/1/H63lz5pc6BynKnWGOoxDtRWIcTsk/aGNJVw9DGPMrN9UDAxRXKK/UGV6sU5C5J5WMggzZOE0PC5iiZa+CRWWaNwXfaVPmk3rAx5Va4+MrjMIG2PTAtDOmqg23jRcrNF05NHeyMwVW/HfnvUsVgHCjt0sCQUGSizDX5QunrVFhW5AUCcUdbY0iokwzhjRzrEseQCH0/QJgDA7hdBBSh9vsm+IFlHcca6maNPWLoYWFd3D2AYmVImGukcsHfO2SWRiQnspcTcbouGyf4e7qa2l9EuenH5HizVSeRISGLSOYaaHXzHV+6fYIfVOeEXitu7OCQ/VFUf4KwDvGSfeO6ibi6MCDU/UOK7rY6hwK/9orQGELrP0j4yYHiVtvEcB3I1Wig1DrB3xWJdehl8631hsCzjcpl+g+vW5qUE3I4ya1/L7WYsfbETDIzEv+I9ozhOj0TzowASqnYddthk7zK40C6PCknpE/r36cdQjNC6l+mdOAZvv9ia4QjuARt5rZPwXdFcYZtac18eJzuaAsdlQ/vaqFclhNS6iVTa+ZZ44dA6ao+AQtAKfXLR6SEGQFXLxtXodhilNo6Z0iEtu8jzEGI/JvWWO+YXoP1CdSvPK2IdQjrGpCy74p2x92tMbRFvl9Yh065B5SLIX16ySxxyBaIqxtN6QP26s+GbvKQlwFEyE+mhHfOisA4yo1jdTUbcL0xG5SDIXFzUutfhMYvdCg3bSm96Mdy0lCWtaqs/dyJf6iYc3KKvycsC3bE/sceohbkzDPqW6nxaf2LkPjO1i8Kvs9ZVE8JQ/UEBIgsYMaEGStLrUnQ4xGVRsKVi5vys4+qauFqoVynJ+RIklv/XkzuXjJZYsZaEQQOgQ6UvT45yBYd4hDDpB44sFleVcwHFsOQXTxeRQiFn2aNdaXcvGBF8oG8eLuXzSQKzECSaLN1XTOkby+ZCx2fM16fbSrhKmLq0wMH5qOxdc2QfUhO8kEI/DvWGELld9Vnm1rABNTDGnvW0BRhHeoxHVJXDNmYZDOPy80EE8kIfaaph6vJAKLGVwjrXOajWBhyIMnmGoS+f2WNQQDeWJ9n6rEV5dbnnEOyTbkT5bZQzi8Tepp9YK55X9AiYc6BDSocP4fQeETLrKPPMxNAFBDMOYusNyfMQFF9yl3mo5JOyGJ7yYyuEGaEkF9TAd+zGeUWDUPQ9SBhnU+xMW+GRIi61PoXoe6PWmPdKAiNzyIgN8FHD59vK9ZEq/mUgD/3rxREzWQRCOK1A0X+QnLkFrw+nUtlyGqSXUWuhCCfdWnFXRQYweEee5DWdI3CY3OfoZNY5nowg9/f9WxdEV02vFohSwzZ19AuwpwJLF/av6IdMvgwYHvrzYwnAQJ/L5JznNOI/Q0dY429xCdlFLpTbgtlb6UG5poPqXCfZTNet1HGHsLFVHzNIZi9LsvYfnzCGvTK0JhPjAN4A0EpPxR6Qvq0hXCV3bgyg8z4EJVWAOtKPkGyhM0o1yOH8jhS33McYOcXekJCRoK5Jqrb6gwKQq3C1bIgN8FL0zBDG1/D32t2idfZg+Tml2nDd8xgX4TG1mXeiQpNXMLrFvqekGNIbv17AeWWbhuTMWYkth7MjuE6OCFfzdjeNKFcLxxKLEp1fxDCNsz3lX0Amy6igFD2JxwC6xEZFOCnJfRaSYFL8YWP+zlhHRTfHSWG9GlPC2HUNvPAVzmOsonXY7zW9AzuT20EWJUl5vSnInrg2AyJzk1S619cxE51hNFzm4wy5KIYr7Ugo3u0F+U6T96gIG4yCvuRZT6qtoRRqfUvKhTY/e9akKdbKKWIs9xMlns1jqbcbACYuqRqFiPC+xLe7LNJrqwwmHKb7AyhwFeZVcRZA3HTDO/TJpSb7us6wGwgqry3zZANSHb9THccwQWFFqUUceaP75HxvXKFKELE+0RYd4nNkId4nATwVKxyfFjWe8nE1ecPe318xvcKHho7iHslyVU/4GbeNcyQUtIWavM86RBIu1P2gc06NIbr9ObXWtbRx6HgTjX0rrDulFqGhCH7MGGyS9kZRJUDvAlKqdIGxW9MhewVzDl2tZIaD1myVy1D7kZBQEQ+zHWcjm2owOSdlAOC9x1FiifweMFQXElpHDDlNLHG7qXorrNQ+LYGQ0rFou6mXAPnsVR5Berxnf9JfnV9aoGEebgeD6ywvUJ2wZEOWXKqsK4rGFIqE+cqfL4XVSYQiTKDlZMo+yTsaqfx3P0rdK+6OsYeleR1bFxHYdL0PIJ+pWJTfgV/SkF0OIq1fs5vjHYsAuE0bU2VDRePSG7YjmDItoL86MoUa0MKMGZ/3Ya8cP0gETWFaKB89Z02wWunZcRFF+YZ1/ZvCgmudirQRaJiAzaoFpSTxXnGl+t+KwQsK5CnVitDPlmHhV5UoQC+LJCnfv5nVMPufEET7+l+KwTMLJCnVp+q1RFyYpTy8qrut0KAi0fgWIhKAFwEhvwsYkKrPNrSNN1vhYAHHGMwMUaV1pkLhpT6IrsKBaBsxhzdc0UewN74kWNcqhE6Ewwp5XkckUd9H6X7rsiDfIEkPYV108GQUnbYMeQOKkDPlrm69woLcJe6Kus28WDI52tPyCjFBkKoqx4Lsg/P0P1XhACLDRIFVzn+hwJcjQSt/NNqXvyA8EEomeIyoD9O2U1/VRQOlIx5zTEOF7UUP7taUa41Uk4WJiOhO1+tRyT2TNVnUfG4nYL+RS7g1JQS3CaFGRIV9SVjN4otNc1zTCM8/059JhWLGymoROFCqwhGpRD/zQozJLTm64VFyAe5Jc//IE+eSkE1LPVzVw6Wsh7Rn9weP/AXIu1bCNcZHV5Aode2VFTpV5Q/gwxMjdwTxMHdRZVRc7uSlRcwGuo83hYxD6X5pFQXeHQedDEkSjMP9LgZcPM5Ef//kF/hyNm+hvL7NBXpAg6Yt1nBRXnCvhTt5RtEfn3CB4QPL1d9SBTnPNzjQoP5F+BzEjbjkxOxl0302abutfwFM+NSj/kNmC8u8Zg7mUU9imLItvzhLTwueB/LEF/pc1Mw70BbPshjLtI+kM+12BY6bczj49gHR7F2hFf42vo8KhZISbiIxTMfZkTLlD7kiKvNFywJQ/kVnjeDVM+bWSFCfSDNt6kctGM+QcIbrDS+KcKoMf6s6x9R5eFQaQDJ7ed6fgjMQvDawF75vKFnKIj6eJ9/CSiOv0yfYSqBqh3NWYxDmRREgCGfv0sR1xpK+c2HYr3C8/jvuQV8IFyMezMpFDYzDomaIOXUQIPuxxq12hUVxeJH1jOGSBN9q8PC9YO4yC91bxUFYh4rOrf4TC6kXPFDrKbfo3us8MQdzDNP+y4otH42irYfR0G9xLd0vxV5gAZR+1JgPvy6kIXFFnR/zNDOFATuPqX7r6AgrhaFyQ6moNDUs8VcZK0Sb+ABJvS9O4HlzN0pe928FG6gxN4LzANTWF4sCXG1qUBR81FMsNrDToVm3eiZCHcS/NeNlVFTC4QXwoaMgqPzKej4ihLNb9Ka3WBLxv8EGAD1euVwPUOAYgAAAABJRU5ErkJggg==" alt="" class="icon">
	
		<div class="text">
			Conteúdo destinado para profissionais do setor agrícola
		</div>

		<button type="button" class="btn btn-secondary">
			Ir para o site
			<i class="fas fa-fw fa-angle-right"></i>
		</button>
	</div>
</div>


<div class="content-area">

	<div class="global-search">
		<button type="button" class="btn-search" data-toggle-class="active" data-target=".global-search">
			<i class="fas fa-fw fa-search"></i>
		</button>

		<div class="search-wrapper">
			<div class="container">
				<form action="search.php">
					<input type="search" name="search" class="form-control" placeholder="Digite aqui a sua busca" required>

					<button class="search-submit" type="submit">
						<i class="fas fa-fw fa-search"></i>
					</button>
				</form>
			</div>
		</div>
	</div>
