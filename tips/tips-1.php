<header class="container-fluid tips-header">
    <h2 class="tips-title text-center">Les positions en CSS</h2>
</header>

<div class="bg-white">
    <div class="container tips-art">
        <div class="row py-lg-5">
            <article class="col">
                <p>Il existe cinq mots-clés que l&#x27;on peut utiliser
                    avec la propriété CSS <code>position</code> :</p>
                <p class="code">position: relative;<br>position: absolute;<br>position: fixed;<br>position:
                    sticky;<br>position: static;</p>
                <p>Attardons-nous sur les trois premières.</p>
                <h3 class="mt-lg-4 mb-lg-3">Position fixed</h3>
                <p>Un élément positionné en <code>fixed</code> sortira du flux de la page et viendra se positionner
                    "coller"
                    en haut de la page. Ainsi, lors du scroll de la page, l'élément sera toujours visible à la même
                    position.</p>
                <p>Attention, le fait que l'élément positionné ainsi ne fasse plus parti du flow de la page, fera
                    remonté
                    tous les autres éléments suivants en haut. Autrement dis, la page se comporte comme l'élément fix
                    n'existait pas en terme de place.
                    Il pourra ainsi cacher les éléments qui viennent ensuite. Si l'on prend l'exemple d'une barre de
                    navigation qui serait fixé en haut, une des solutions serait d'appliquer une <code>margin-top</code>
                    au
                    <code>body</code> de la
                    même hauteur que la barre.</p>
                <h3 class="mt-lg-4 mb-lg-3">Position relative</h3>
                <p>Un élément positionné en relative fait encore partie du flux de la page. En attribuant une valeur aux
                    propriétés <code>top</code>, <code>right</code>, <code>bottom</code> ou <code>left</code>, on peut
                    ainsi
                    le déplacer. </p>
                <p>À noter que le déplacement se fera par rapport à sa position de départ. Le décalage n'aura pas
                    d'incidence sur les autres éléments.</p>
                <h3 class="mt-lg-4 mb-lg-3">Position absolute</h3>
                <p>Un élément en position absolute sort du flux de la page. Il sera positionné par rapport à l'ancêtre
                    le
                    plus proche positionné de façon relative, toujours en jouant avec les valaurs que l'on peut
                    attribuer à
                    <code>top</code>, <code>right</code>, <code>bottom</code> ou <code>left</code>.<br>
                    Si aucun de ces ancêtres n'a de position relative, alors il sera positionné par rapport au body.</p>
                <h3 class="mt-lg-4 mb-lg-3">Différences entre absolute et fixed</h3>
                <p>Prenons l'exemple d'un bouton <i>back to top</i>. </p>
                <p>Nous avons deux choix :</p>
                <ul>
                    <li>soit le placé en bas de la page en position <code>absolute</code>. Il sera toujours placé au
                        même
                        endroit, peu importe la longueur de notre page,</li>
                    <li>ou le placé en <code>fixed</code>, et ainsi le mettre à disposition peu importe notre position
                        dans
                        la page.</li>
                </ul>
            </article>
        </div>
    </div>
</div>