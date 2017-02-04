<div id="pdf_view">
        <div id="pdf1"></div>
        <div id="cerrar">
            <button onclick="ocultar()" type="button" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-remove "></span>
            </button>
        </div>
        <div id="container_close" onclick="ocultar()" >
        
    </div>
</div>



<?php get_header(); ?>



    <div class="container" data-example-id="collapse-accordion">

        <div>

            <h2 id="lineamiento-header">Lineamientos Editoriales </h2>
            <a id="lineamientos" onclick="mostrar()">
                <img src="http://localhost/wp-content/uploads/2016/07/pdf.png" alt="Smiley face" height="30" width="30">
            </a>


            <a id="lineamientos-2" img href="<?php echo get_template_directory_uri();?>/css/lineamientos.pdf" target="_blank" ><img src="<?php echo get_template_directory_uri();?>/css/pdf.png" alt="Smiley face" height="30" width="30"></a>




        </div>


        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">


            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      1. Lineamientos Editoriales de la FES
          </a>
      </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        <p>Establecer los principios, criterios y lineamientos generales para organizar, agilizar y propiciar el mejoramiento de la calidad académica y editorial de las obras de los profesores e investigadores que publique la FES Acatlán.</p>
                        <h4>1.2 Objetivos específicos</h4>
                        <ul>
                            <li>Establecer las políticas editoriales de la Facultad.</li>
                            <li>Fijar las responsabilidades y el orden de intervención de las diferentes instancias involucradas en el proceso editorial.</li>
                            <li>Explicitar los procedimientos de control y seguimiento del proceso de producción editorial.</li>
                        </ul>
                    </div>
                </div>
            </div>







            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          2. Comité Editorial
        </a>
      </h4>
                </div>
                <div aria-expanded="false" id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        <p>El Comité Editorial es un órgano colegiado cuya función central consiste en aprobar los trabajos propuestos para su publicación, siempre y cuando cumplan con los requisitos formales y de calidad establecidos en estos lineamientos, además de dar seguimiento al proceso de publicación de esos trabajos.</p>
                        <h4>2.1 Integración</h4>
                        <p>El Comité Editorial se integrará por los siguientes funcionarios de la Facultad:</p>
                        <ul>
                            <li>El Director, quien fungirá como Presidente del Comité y contará con voto de calidad. En su ausencia será sustituido por el Coordinador de Servicios Académicos.</li>
                            <li>El Coordinador de Servicios Académicos, quien fungirá como Secretario Ejecutivo del Comité.</li>
                            <li>El Secretario General Académico.</li>
                            <li>El Secretario de Extensión Universitaria y Vinculación Institucional.</li>
                            <li>El Secretario de Estudios Profesionales.</li>
                            <li>El Coordinador de Estudios de Posgrado.</li>
                            <li>El Coordinador del Programa de Investigación.</li>
                            <li>El Coordinador de la Unidad de Investigación Multidisciplinaria.</li>
                            <li>El Coordinador del Centro de Enseñanza de Idiomas.</li>
                            <li>Los Jefes de las Divisiones Académicas.</li>
                            <li>El Jefe de la Unidad de Servicios Editoriales, quien fungirá como Secretario Técnico y de Actas del Comité.</li>
                        </ul>
                        <h4>2.2 Atribuciones</h4>
                        <p>El Comité Editorial tendrá las siguientes atribuciones:</p>
                        <ul>
                            <li>Establecer la política editorial de la Facultad.</li>
                            <li>Revisar y, en su caso, modificar la normatividad editorial a la que se ajustarán todas las etapas del proceso de publicación.</li>
                            <li>Actualizar periódicamente la normatividad del sistema editorial para considerar las nuevas formas de publicación que surjan, ya sean impresas, electrónicas o multimedia.</li>
                            <li>Autorizar la integración de los Comités Editoriales Internos de la Facultad, con base en la propuesta que haga cada División Académica.</li>
                            <li>Aprobar o rechazar la publicación de los diversos materiales que sean sometidos a su consideración.</li>
                            <li>Fijar prioridades y calendarizar las publicaciones que se autoricen.</li>
                            <li>Vigilar que los tiempos de publicación se cumplan.</li>
                            <li>Analizar y, en su caso, aprobar las propuestas de coediciones.</li>
                            <li>Gestionar los procedimientos para la protección de la propiedad intelectual de las obras publicadas por la FES Acatlán.</li>
                        </ul>

                    </div>
                </div>
            </div>



            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        3.  Políticas de publicación
        </a>
      </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                        <p>Toda publicación de la FES Acatlán deberá:</p>
                        <ul>
                            <li>Ser de un académico adscrito a la FES Acatlán.</li>
                            <li>Ser inédita, excepto cuando se trate de reimpresiones y reediciones.</li>
                            <li>No estar comprometida para su publicación en cualquier otro medio impreso o digital.</li>
                            <li>Pertenecer a algún área de conocimiento que se imparta o se investigue en la FES Acatlán.</li>
                            <li>Tener rigor metodológico y calidad académica, con una redacción clara y adecuada.</li>
                            <li>Someterse a un procedimiento de dictaminación anónimo en los términos que se indican en las secciones 5.1, 5.2 y 5.3 de este documento.</li>
                            <li>Los derechos de autor de las obras que se publiquen pertenecen a la Universidad Nacional Autónoma de México y se sujetarán a los lineamientos vigentes.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
4. Textos publicables        </a>
      </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                    <div class="panel-body">
                        <h4>4.1 Productos de investigación</h4>
                        <p>Se consideran productos de investigación todos aquellos artículos, libros, capítulos en libros, reseñas especializadas, tesis de maestría y doctorales, artículos de investigación científica, artículos especializados, investigaciones colectivas y cuadernos de investigación que sean previamente aprobados.</p>
                        <h4>4.2 Materiales de apoyo a la docencia</h4>
                        <p>Se refiere a libros de texto, antologías, apuntes, cuadernos de ejercicios, prácticas de laboratorio, manuales de comprensión de lectura y de apoyo a las clases de idiomas, así como guías de estudio.</p>
                        <h4>4.3 Documentos de difusión</h4>
                        <p>Incluye reseñas, informes y avances de investigación; ponencias, guías, obras colectivas (congresos, cursos, homenajes); reflexiones originales, diccionarios, manuales, revistas de la FES Acatlán, traducciones y transcripciones o discusiones.</p>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFive">
                    <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
5. Procedimientos        </a>
      </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                    <div class="panel-body">
                        <h4>5.1 Propuestas de materiales para su publicación</h4>
                        <ul>
                            <li>El autor, compilador o coordinador de la obra solicitará al Comité Editorial Interno de su órgano de adscripción (División o Coordinación) la publicación de su obra; deberá la solicitud acompañar a los materiales cuya publicación solicite, éstos deberán presentarse conforme a lo dispuesto en la sección 8 de este documento; también deberá asentar que se encuentra totalmente terminada y que está de acuerdo en que el material que entrega sea sometido a dictamen, para determinar la pertinencia de su publicación. (La obra será presentada en CD y en formato impreso por duplicado).</li>
                            <li>El Comité Editorial Interno de cada División Académica o Coordinación, revisa, analiza y valora la obra y, si es el caso la aprueba, para enviarla a dictamen a más tardar 5 días hábiles después de haberla aprobado. En caso de que este Comité no apruebe su publicación, deberá comunicarlo al autor, en los siguientes 5 días hábiles devolviéndole sus materiales.</li>
                            <li>Una vez que el Comité Editorial Interno o Coordinación tenga los dictámenes favorables establecidos para cada tipo de publicación, contará con dos días hábiles para enviar al Secretario Ejecutivo del Comité Editorial de la Facultad, la solicitud por escrito para que la propuesta sea presentada en la siguiente junta al pleno del Comité Editorial de la Facultad; se adjuntarán los dictámenes favorables, la obra impresa, el material en archivo electrónico y el acta de la sesión donde fue aprobada la propuesta.</li>
                            <li>El material aprobado se presentará al Comité Editorial de la Facultad donde se rechazará o aprobará para su edición y posterior impresión y encuadernado.</li>
                            <li>El Secretario Ejecutivo del Comité enviará los materiales aprobados a la Unidad de Servicios Editoriales, al siguiente día hábil de su aprobación, para dar inicio al proceso de edición.</li>
                        </ul>
                        <h4>5.2 Proceso de dictamen</h4>
                        <ul>
                            <li>El autor presentará a su División o Coordinación de adscripción, la solicitud para publicación de su material.</li>
                            <li>Dependiendo del tipo de material de que se trate, el Comité Editorial Interno determinará el número y tipo de dictaminadores, como lo indica el apartado 5.3 de este documento.</li>
                            <li>El proceso de dictamen debe ajustarse al principio de “doble ciego” o doble anonimato. Los evaluadores no deben conocer el nombre del autor de la obra y viceversa.</li>
                            <li>El Jefe de División o Coordinador se encargará de determinar, con base en el área de conocimiento de que trate el material, a los dictaminadores y ponerse en contacto con ellos para solicitarles, mediante oficio, su colaboración.</li>
                            <li>El tiempo para emitir las evaluaciones será de 30 días naturales. Para lo cual es importante hacerlo del conocimiento de los dictaminadores y puedan ajustarse a estos tiempos. Cuando un dictaminador no entregue a tiempo su respuesta, se nombrará a otro dictaminador quien tendrá a su vez treinta días naturales para evaluar el trabajo.</li>
                            <li>Si el resultado de los dictámenes es positivo, pero con observaciones, sugerencias o recomendaciones, se le entregará una copia de éstas al autor, coordinador o compilador de la obra, y se le dará un plazo de 30 días naturales para contestar y precisar los cambios que llevó a cabo (deberá mantenerse el anonimato del dictaminador).</li>
                            <li>Si los dictámenes son positivos y/o se han realizado cambios a la obra, entonces se enviará la versión definitiva para que su publicación sea sometida a consideración del Comité Editorial de la Facultad.
                                <ul>
                                    <li>Para la aprobación de libros se requiere de tres dictaminadores: dos externos y uno interno.</li>
                                    <li>Los libros producto de proyectos institucionales –como Programa de Apoyo a Proyectos de Investigación e Innovación Tecnológica (PAPIIT) o Programa de Apoyo a Proyectos para la Innovación y Mejoramiento de la Enseñanza (PAPIME)— que requieran apoyo económico de la FES Acatlán, para su aprobación requieren de tres dictaminadores: dos externos y uno interno.</li>
                                    <li>Los libros, producto de proyectos institucionales –como PAPIIT o PAPIME- que no requieran apoyo económico, para su aprobación requieren de dos dictaminadores internos propuestos por los autores.</li>
                                    <li>En el caso de libros en coedición, el dictamen lo realizará la FES Acatlán de acuerdo a lo establecido en este documento.</li>
                                </ul>
                            </li>

                        </ul>
                        <h4>5.3 De los dictaminadores</h4>
                        <h4>Libros</h4>
                        <h4>Artículos</h4>
                        <p>Para la aprobación de artículos se requiere de tres dictaminadores internos.</p>
                        <h4>Otros</h4>
                        <p>En el caso de materiales de apoyo a la docencia y documentos de divulgación se requerirán dos dictaminadores internos.</p>

                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingSix">
                    <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
6.   Reimpresiones        </a>
      </h4>
                </div>
                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                    <div class="panel-body">

                        <p>Todo material que previamente haya sido editado por la Facultad y se desee reimprimir no será sometido a dictamen.</p>
                        <ul>
                            <li>La División a la que esté adscrito el autor solicitará al Secretario Ejecutivo del Comité Editorial de la Facultad la reimpresión del trabajo.</li>
                            <li>El Secretario Ejecutivo investigará si la impresión anterior se ha agotado, la fecha en que se puso en circulación el trabajo, el número de ejemplares publicados y el número de clientes potenciales.</li>
                            <li>Si la publicación se ha agotado y existen clientes potenciales, el Secretario Ejecutivo autorizará a la Unidad de Servicios Editoriales su reimpresión. El número de ejemplares se determinará con base en el tiempo en que se agotó la impresión anterior y el número de compradores potenciales.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingSeven">
                    <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
7.  Reediciones        </a>
      </h4>
                </div>
                <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                    <div class="panel-body">
                        <ul>
                            <li>Toda reedición se dictaminará como si fuera la primera edición.</li>
                            <li>Si la anterior edición ya se agotó, se pondrá a consideración del Comité su posible reedición.</li>
                            <li>Se determinará el número de ejemplares con base en el número de compradores potenciales y el tiempo en que se desplazó la edición anterior.</li>
                        </ul>

                    </div>
                </div>
            </div>


            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingEight">
                    <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
8. Comercialización y promoción        </a>
      </h4>
                </div>
                <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                    <div class="panel-body">
                        <h4>8.1 Recepción de los materiales</h4>
                        <p>Terminada la impresión de materiales, éstos serán entregados por la compañía impresora al almacén del plantel, el cual notificará de inmediato a la Unidad de Servicios Editoriales.</p>
                        <h4>8.2 Revisión de los materiales</h4>
                        <p>La Unidad de Servicios Editoriales deberá revisar de manera cuidadosa los ejemplares, para determinar si cumplen con lo estipulado en la solicitud de compra directa y si el trabajo se ha realizado de forma satisfactoria.</p>
                        <p>Si existiera alguna dificultad con la impresión, la Unidad de Servicios Editoriales lo notificará de inmediato al impresor para su solución.</p>
                        <h4>8.3 Aprobación de materiales</h4>
                        <p>En caso de que los ejemplares cumplan con lo contratado, la citada Unidad comunicará a la Coordinación de Servicios Académicos de la existencia de los ejemplares en el almacén, del costo real por ejemplar, tanto del proceso de edición como de impresión y apartará el número de ejemplares necesarios para cumplir con los compromisos administrativos de la publicación y los requeridos para resguardo en el Centro de Información y Documentación.</p>
                        <h4>8.4 Fijación de precio y distribución</h4>
                        <p>La Unidad de Servicios Editoriales es la responsable de fijar el precio de venta de la publicación, para la comercialización de la misma a través de la Librería de la Facultad, y de otras librerías con las cuales existan convenios de promoción y venta.</p>
                        <p>Sólo en el caso de materiales piloto los órganos podrán comercializarlos al costo de recuperación. Dichos materiales deberán ser revisados previamente por el Presidente del Comité, el Secretario Ejecutivo y el Coordinador o Jefe de División que corresponda. El autor y órgano podrá solicitar para efectos de difusión, un determinado número de ejemplares.</p>
                        <h4>8.5 Entrega de regalías</h4>
                        <p>La Unidad de Servicios Editoriales, a través de la Librería Universitaria de la Facultad, entregará al autor las regalías, en especie, que una publicación implica.</p>

                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingNine">
                    <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
9  Presentación de las obras para su publicación       </a>
      </h4>
                </div>
                <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                    <div class="panel-body">
                        <p>Además de una versión impresa debidamente engargolada; los autores deberán presentarla en formato electrónico de acuerdo con los siguientes lineamientos:</p>
                        <ul>
                            <li> En procesador de texto Word para Windows versiones 97–2003. En caso de una versión más reciente aplicar la opción de compatibilidad de archivos.</li>
                            <li> El tamaño del carácter será de 12 puntos (usar la fuente Arial).</li>
                            <li> Para el caso de libros, se capturará un capítulo por archivo y se le pondrá el número del capítulo y no el título. Ejemplo:
                                <ul>
                                    <li>01 índice</li>
                                    <li>02 introducción</li>
                                    <li>03 presentación</li>
                                    <li>04 capítulo 1</li>
                                    <li>05 capítulo 2</li>
                                    <li>06 capítulo 3</li>
                                </ul>
                            </li>
                            <li> Los artículos o ensayos se capturarán en un solo archivo.</li>
                            <li> Se podrán marcar números de superíndices y subíndices, solamente con el modo de –aspecto de texto- o –carácter-.</li>
                            <li> Se podrán incluir pies de página dentro del texto con los modos correspondientes de inserción de referencia.</li>
                            <li> Configurar página: Tamaño carta (no usar A4 ni oficio); márgenes superior e inferior de 2.2 cm; izquierdo-derecho de 3 cm.</li>
                            - Párrafo: General; Alineación –justificada; Sangría izq.-der.– 0, especial, primera línea– .5 cm.; Espaciado, anterior-posterior – 0, interlineado – 1.5 líneas
                            <li> No se usarán guiones manuales para separar palabras al final de párrafo.</li>
                            <li> Usar la división automática de documento.</li>
                            <li> No se dejarán espacios entre párrafos.</li>
                            <li> Se numerarán las páginas.</li>
                            <li> Se podrán incluir jerarquías de texto (itálicas, negritas, etc.).</li>
                            <li> En caso de centrar los títulos, deberá hacerse con el modo de texto centrado (no con tabuladores, ni con espacios) verificando que la línea no tenga sangría.</li>
                            <li> Si se incluyen citas de texto de más de cuatro líneas se distinguirán con sangría izquierda de 1.5 cm. y especial de 0.5 cm. si es que la cita requiere este sangrado en la primera línea.</li>
                        </ul>

                    </div>
                </div>
            </div>



            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTen">
                    <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
10  Lineamientos de edición       </a>
      </h4>
                </div>
                <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
                    <div class="panel-body">
                        <p>Para evitar retrasos y modificaciones sustanciales en la edición de un documento. Se deberán cumplir los siguientes lineamientos:</p>
                        <h4>10.1 Revisiones y correcciones</h4>
                        <ul class="lista-sin-punto">
                            <li>a) La Unidad de Servicios Editoriales llevará a cabo el proceso de corrección y formación tipográfica y al concluir las primeras galeras éstas serán turnadas al órgano correspondiente.</li>
                            <li>b) El órgano turnará, para una primera revisión, el documento al autor, quién en un plazo no mayor de 10 días hábiles lo regresará a la Unidad de Servicios Editoriales con las observaciones señaladas sobre las galeras.</li>
                            <li>c) Una vez que la Unidad de Servicios Editoriales realice las correcciones que resulten del inciso b) y edite el documento, se enviarán las pruebas finales del capítulo al órgano para que se lleve a cabo una última revisión y se otorgue el visto bueno por parte del autor, debiendo regresarse el documento a la citada Unidad, en un plazo máximo de 10 días hábiles después de su recepción.</li>
                            <li>d) En caso de que las correcciones que se deseen realizar sean de adición de texto y/o figuras que provoquen movimiento de páginas y párrafos, se considerará que se inicia nuevamente el proceso de edición y el material se será ubicado al final de los documentos en lista de espera.</li>
                            <li>e) Si las correcciones implicaran el agregar o cancelar capítulos o párrafos de importancia, el documento deberá someterse nuevamente a la aprobación del Comité Editorial.</li>
                            <li>f) Si aún existieran correcciones, la Unidad de Servicios Editoriales, las realizará e integrará el documento para su posterior fotomecánica.</li>
                            <li>g) Cuando los plazos establecidos no se cumplan por parte del autor, se le otorgará por única vez, una prórroga por el mismo tiempo señalado en los puntos b y c. Si al término de este plazo no se reciben los documentos con las correcciones requeridas o el visto bueno solicitado, se cancelará definitivamente la edición del material.</li>
                        </ul>
                        <h4>10.2 Características de las publicaciones</h4>
                        <p>Las diferentes publicaciones de la Facultad serán editadas conforme a los criterios editoriales determinados por la Unidad de Servicios Editoriales, las dimensiones de las mismas serán de acuerdo a las necesidades de la obra y podrán tener los siguientes tamaños:</p>
                        <ul>
                            <li>Papel
                                <ul class="lista-sin-punto">
                                    <li>- 10.5 x 17.0 cm. (1/4 de oficio), éstas son las dimensiones del minilibro y tendrá una extensión máxima de 40 cuartillas y mínimo de 20 más o menos.</li>
                                    <li>- 14.0 x 21.5 cm. (1/2 carta)</li>
                                    <li>- 17.0 x 21.5 cm. (1/2 oficio)</li>
                                    <li>- 14.5 x 23 cm. (especial)</li>
                                    <li>- 21.5 x 28 cm. (carta)</li>
                                </ul>
                            </li>
                            <li>Interiores</li>
                            <p>Se podrá utilizar papel bond blanco de 36 kg. o bien, papel cultural color paja o ahuesado, ambos de 37 kg.</p>
                            <li>Portadas</li>
                            <p>Se trabajarán en cartulina couché cubierta dos caras de 225 gramos, cartulina Bristol, o bien, cartulina sulfatada de 12 puntos una cara, todas con acabado de barniz de impresión o plastificado.</p>
                            <li>Tintas</li>
                            <p>Los interiores serán a una sola tinta y las portadas podrán tener hasta 4 tintas.</p>
                        </ul>
                        <h4>10.3 Criterios editoriales</h4>
                        <h4>Presentación de originales</h4>
                        <ul>
                            <li>Deberán entregarse en medio digital (separando las gráficas, fotografías o imágenes del archivo de texto).</li>
                            <li>No se podrán ocupar imágenes que tengan copyright.</li>
                            <li>Las gráficas preferentemente deberán presentarse en escala de grises.</li>
                            <li>El Interlineado será a doble espacio, con tipografía Arial de 12 puntos y márgenes simétricos de 2.5 cm.</li>
                            <li>Bajo el programa Office Word versiones 97–2003. En caso de versiones más recientes aplicar la opción de compatibilidad de archivos versión 97–2003.</li>
                            <li>En la primera página figurará el título del artículo, seguido del nombre del autor o autores, la categoría y adscripción académica y dirección electrónica.</li>
                            <li>La segunda página contendrá un resumen del trabajo no superior a 200 palabras, además de presentar entre 3 y 5 conceptos clave del trabajo.</li>
                        </ul>
                        <h4>Citación</h4>
                        <p>En la elaboración de citas se sugiere utilizar la siguiente presentación:</p>
                        <ul class="lista-sin-punto">
                            <li>1. Ramón Tamames, La Unión Europea, tercera edición, Madrid, Alianza Editorial, serie Alianza Universidad Textos, núm. 146,1996, pp. 69 y ss.</li>
                            <li>2. José Isidro Saucedo González, “El estado trasnacional”, Boletín Mexicano de Derecho Comparado, nueva serie, año XXXVIII, núm. 112, enero-abril de 2005, pp. 223-271.</li>
                            <li>3. Rodolfo Vergara, “Estudio introductoria”, en March, James G. y Olsen, Johan P., El redescubrimiento de las instituciones: La base organizativa de la política, México, FCE/Colegio Nacional de Ciencias Políticas y Administración Pública, colección Nuevas Lecturas de Política y Gobierno, 1997, pp. 19 y ss.</li>
                            <li>4. Ramón Tamames, op. cit., nota 1, p. 78</li>
                            <li>5. Ídem</li>
                            <li>6. Ibidem, p. 82</li>
                        </ul>
                        <p>- Las notas deberán presentarse al pie de página, escritas en letra Arial de 11 puntos. Los distintos elementos que las conforman deberán ir separados por coma.</p>
                        <h4>Referencias bibliográficas</h4>
                        <p>En la elaboración de la bibliografía se sugiere referenciar sólo las obras citadas en el cuerpo del texto y no añadir bibliografía de consulta, además se sugiere utilizar la siguiente presentación:</p>
                        <p>Baca Olamendi, Laura, Diálogo y democracia, México, IFE, 1996.</p>

                    </div>
                </div>
            </div>



            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingEleven">
                    <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
11. Edición e impresión        </a>
      </h4>
                </div>
                <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">
                    <div class="panel-body">
                        <h4>11.1 Procedimiento de edición</h4>
                        <p>A continuación se describen las etapas de que consta el proceso de producción editorial seguido en el Departamento de Tipografía y Diseño de la Unidad de Servicios Editoriales.</p>
                        <ul>
                            <li>Revisión de originales</li>
                            <p>Se realiza la revisión del texto enviado al Comité Editorial ya sea en disco compacto o en hojas impresas, con la finalidad de ver las características de la publicación y básicamente conocer las condiciones en que se presenta el material (orden de artículos, material complejo, CD en buen estado, etc.)</p>
                            <li>Corrección (lectura)</li>
                            <p>El cuerpo de correctores revisa el material enviado o la impresión de los CD’s recibidos con la finalidad de corregir los posibles errores de ortografía o estilo que pudieran existir.</p>
                            <li>Correcciones (captura)</li>
                            <p>Una vez revisado el texto se procede a realizar las correcciones pertinentes con el procesador de textos, según lo marcado por el corrector en su revisión.</p>
                            <li>Edición</li>
                            <p>Una vez realizadas las correcciones y con el material preparado en las condiciones adecuadas, se procede a darle formato (tamaño de caja, largo de línea, cornisas, folios, etc.)</p>
                            <li>Corrección (lectura)</li>
                            <p>Realizada la edición en el procesador de textos, se hará una segunda lectura por parte de los correctores para verificar que las características de formato asignadas a la obra se hayan observado adecuadamente.</p>
                            <li>Correcciones (captura)</li>
                            <p>Se realizan las observaciones que pudiesen surgir en la fase anterior para proceder a la impresión de primeras galeras que serán enviadas al autor para su lectura y posibles observaciones que se puedan realizar.</p>
                            <li>Corrección por el autor</li>
                            <p>El autor recibe, a través de su órgano de adscripción, las galeras enviadas por la Unidad de Servicios Editoriales para su lectura y observaciones que pudieran surgir.</p>
                            <li>Correcciones (captura)</li>
                            <p>Recibido el material previamente leído por el autor, se hacen las correcciones y observaciones que él pudiera haber realizado, con la finalidad de dejar lo más depurado posible las segundas galeras que serán enviadas al autor para que verifique la realización de lo apuntado en su primera lectura.</p>
                            <li>Visto bueno del autor</li>
                            <p>En este punto se supone que el material ha quedado “limpio”, listo para que el autor otorgue el visto bueno de las galeras que a él se presentan.</p>
                            <li>Bocetos portada</li>
                            <p>El Departamento de Tipografía y Diseño presenta varias opciones de portadas para la publicación con la intención de que el autor decida cuál de ellas es la más adecuada para su obra.</p>
                            <li>Correcciones</li>
                            <p>Una vez que el autor ha revisado las opciones presentadas para la portada de su obra y ha elegido una de ellas, comienza la siguiente fase de la edición. En caso de que exista todavía alguna observación con relación a la portada, se realizan las modificaciones pertinentes.</p>
                            <li>Original</li>
                            <p>Hechas las correcciones y quedando el diseño de acuerdo con lo observado por el autor, se procede a realizar los originales mecánicos para la portada.</p>
                            <li>Visto bueno del autor</li>
                            <p>Los originales mecánicos de la portada son enviados con la finalidad de que otorgue su visto bueno para que se pueda continuar con el proceso de impresión de la obra.</p>
                            <li>Falsa</li>
                            <p>Esta hoja, que es la número 1 del folio, contiene el título asignado a la obra, así como el nombre del autor o autores.</p>
                            <li>Directorio</li>
                            <p>En esta hoja, que es la número 2 del folio, queda asentado el directorio en orden que se marca en estos lineamientos editoriales, actualizado, tanto de la UNAM como de la FES Acatlán.</p>
                            <li>Portadilla</li>
                            <p>En esta hoja, que es la número 3 del folio, están los créditos de la UNAM, y de la FES, título de la obra y nombre del autor. Por lo regular es una producción de la portada del libro.</p>
                            <li>Legal</li>
                            <p>En esta hoja, que es la número 4 del folio, quedan asentados los siguiente datos: número y año de la edición, reimpresión o reedición según sea el caso, los derechos reservados de la UNAM, dirección de la misma, hecho en México y el ISBN correspondiente.</p>
                            <li>Colofón</li>
                            <p>Este es realizado por la imprenta asignada, con la finalidad de que los datos del impresor, el tipo de material utilizado, la fecha de impresión y el número de ejemplares impresos sean los correctos.</p>
                            <p>Falsa, directorio, portadilla, legal y colofón siempre se realizan al finalizar la obra con el propósito de que los datos que contienen cada una de estas páginas sean lo más actualizados posible.</p>
                        </ul>
                        <h4>11.2 Impresión</h4>
                        <ul>
                            <li> Una vez concluida la edición de la obra se llevará a cabo, en caso de ser necesario, la fotomecánica correspondiente, la cual es realizada por el Departamento de Reproducciones Gráficas. </li>
                            <li> Acto seguido la Unidad de Servicios Editoriales solicitará al órgano respectivo una sugerencia en cuanto al número de ejemplares que considera conveniente se impriman debiendo el citado órgano justificar ampliamente la cantidad sugerida.</li>
                            <li> El número definitivo de los ejemplares a imprimir, así como todos los aspectos administrativos relacionados con las diversas publicaciones, serán acordados por el Presidente y el Secretario Ejecutivo del Comité.</li>
                            <li> Para el caso de materiales de apoyo a la docencia, que no tengan características de libro, se imprimirán entre 200 y 600 ejemplares y el proceso se llevará a cabo en offset. Si se requirieran menos de 200 ejemplares, se sacarán fotocopias del documento y se engraparán.</li>
                            <li> Una vez que se han presentado los negativos por parte del Departamento de Reproducciones Gráficas, se realiza la solicitud de compra directa al Departamento de Adquisiciones para que éste a su vez solicite las cotizaciones a sus proveedores registrados.</li>
                        </ul>
                        <p>En esta solicitud se recopilan los siguientes datos:</p>
                        <ul>
                            <li>Título.- Se anota el título completo de la obra a imprimir.</li>
                            <li>Tamaño.- Aquí se anota el tamaño del formato que se ha asignado a la obra.</li>
                            <li>Forma.- Se refiere a la forma en que quedará la encuadernación, puede ser francesa (vertical) o italiana (horizontal).</li>
                            <li>No. de página.- Se anota el número total de páginas que componen la obra, incluyendo la página para el colofón. El número tendrá que ser siempre par.</li>
                            <li>Interiores.- Se describe el tipo de papel a utilizar en el cuerpo del libro.</li>
                        </ul>
                        <p>Además se anota el número de tintas a utilizar en la impresión del texto.</p>
                        <ul>
                            <li>Portada.- Se describe el tipo de material y número de tintas a utilizar en la impresión de la portada.</li>
                            <li>Tipo de encuadernación.- Se selecciona alguna de las formas de encuadernado, como pueden ser: cosido, pegado, engrapado o cosido y pegado. Actualmente se solicita pegado con el proceso conocido como hot melt, a menos de que el volumen y manejo de la obra lo amerite se solicita cosido y pegado.</li>
                            <li>Negativos.- Se describe la forma en que son entregados los negativos por parte del Departamento de Reproducciones Gráficas de la Unidad de Servicios Editoriales.</li>
                            <li>Servicios Editoriales –por lo general éstos se envían sin bloquear y sin armar-. En raras ocasiones se solicita el negativado del texto por parte del impresor. Cabe mencionar que actualmente se solicita la realización de los negativos para portada.</li>
                            <li>Tiraje.- Se anota el número de ejemplares acordado.</li>
                        </ul>

                    </div>
                </div>
            </div>


            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwelve">
                    <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
Anexo 1: Glosario de términos      </a>
      </h4>
                </div>
                <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwelve">
                    <div class="panel-body">
                        <h4>ARTÍCULO</h4>
                        <p>Escrito que tiene como propósito manifestar las tendencias y posiciones del pensamiento del autor, a través del uso correcto y estructurado del idioma. Tiene como características:</p>
                        <ul>
                            <li>Ofrece información pertinente sobre un tema concreto.</li>
                            <li>Es una exposición razonada para sostener una posición.</li>
                            <li>Es una exposición comentada.</li>
                            <li>Posee originalidad en el estilo.</li>
                        </ul>
                        <h4>ENSAYO</h4>
                        <p>Es un escrito breve. Como su nombre lo dice es un intento, una prueba argumentativa del autor. Se caracteriza por:</p>
                        <ul>
                            <li>Ser un escrito breve.</li>
                            <li>Tener un rasgo preliminar o introductorio.</li>
                            <li>Ser de carácter propedéutico.</li>
                            <li>Poseer un estilo denso, sin una explicación detallada.</li>
                            <li>Ofrecer parcialidad en la expresión de ideas.</li>
                            <li>Presentar la importancia sustancial que estas aportaciones puedan generar en el ámbito del conocimiento.</li>
                            <li>Incitar al trabajo intelectual y a la prosecución de ideas, dando pautas para su elaboración.</li>
                        </ul>
                        <h4>INFORME</h4>
                        <p>Es un escrito que refiere o analiza hechos o situaciones, implicando un juicio de valor. Representa la muestra del trabajo que se ha llevado a cabo durante un tiempo. Las características del informe son:</p>
                        <ul>
                            <li>Describe una investigación, una tarea realizada, un hecho o una situación.</li>
                            <li>Estudia y profundiza un asunto o situación.</li>
                            <li>Exige una explicación amplia.</li>
                            <li>Cumple con un estilo uniforme (técnico) en toda su extensión.</li>
                            <li>Precisa a los destinatarios de la investigación el tema o asunto tratado.</li>
                            <li>Comienza exponiendo el trabajo previo al informe.</li>
                            <li>Termina con ideas de posibles estudios futuros.</li>
                        </ul>
                        <h4>LIBRO</h4>
                        <p>Es un instrumento que fija materialmente el discurso escrito. Tiene una composición orgánica y total que incorpora, certifica y transmite el contenido en su estructura gramatical y sintáctica, abre, además, la posibilidad de descifrar, reintegrar e interpretar la cultura alcanzada en el tiempo y en el espacio sobre un tema, problema o conocimiento.</p>
                        <p>1 Las definiciones que contiene este documento fueron tomadas de: Hernández Miche, Susana y otros: Lecciones sobre Metodología de las Ciencias Sociales. UNAM, México, 1985. Arenas, Paula, Manual de redacción, EDIMAT, Libros, Madrid, 2005.</p>

                    </div>
                </div>
            </div>



            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThirteen">
                    <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
Anexo 2: Formatos       </a>
      </h4>
                </div>
                <div id="collapseThirteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThirteen">
                    <div class="panel-body">
                        <h4>• Recepción de documento</h4>
                        <h4>• Opinión del Programa Académico</h4>
                        <h4>• Solicitud de dictamen</h4>
                        <p>FACULTAD DE ESTUDIOS SUPERIORES ACATLÁN ÁREA Oficio FESA/ / / ASUNTO: Dictamen de libro. AL DICTAMINADOR P r e s e n t e. En conocimiento de su sólida formación y distinguida trayectoria académica, me permito solicitarle la dictaminación para el libro titulado NOMBRE, con el objeto de determinar su posible publicación. En caso de favorecernos con su apoyo, le agradecería emitir su dictamen de acuerdo al formato adjunto y enviarlo a esta ÁREA en un plazo de 30 días naturales, contados a partir de la fecha de recepción del presente. Sin otro particular, le agradezco de antemano su colaboración.</p>
                        <p>A T E N T A M E N T E “POR MI RAZA HABLARÁ MI ESPÍRITU” Santa Cruz Acatlán, Estado de México, a FECHA. Responsable del área Nombre</p>
                        <h4>Formato para dictamen</h4>
                        <ul class="lista-sin-punto">
                            <li>1. DICTAMEN DIRIGIDO AL SOLICITANTE.</li>
                            <li>2. TÍTULO DEL LIBRO.</li>
                            <li>3. EXTENSIÓN EN PÁGINAS.</li>
                            <li>4. PLANTEAMIENTO DEL PROBLEMA
                                <ul class="lista-sin-punto">
                                    <li>a. Originalidad e importancia del problema</li>
                                    <li>¿El tema estudiado se inserta en una discusión actual?</li>
                                    <li>b. Planteamiento del problema</li>
                                    <li>¿Hay una hipótesis, una tesis propuesta?</li>
                                    <li>c. Fundamentación teórica</li>
                                    <li>¿El libro se inserta en un marco de debate determinado? ¿El libro tiene los suficientes apoyos teóricos para esa inserción?</li>
                                </ul>
                            </li>
                            <li>5. DESARROLLO
                                <ul class="lista-sin-punto">
                                    <li>a. Estructura y articulación del tema estudiado</li>
                                    <li>¿Existe una exposición sistematizada u ordenada del tema?</li>
                                    <li>b. Análisis sustantivo del problema y solución planteada</li>
                                    <li>¿Se aborda realmente el problema planteado? ¿La solución propuesta es congruente?</li>
                                    <li>c. Argumentación</li>
                                    <li>¿Se realiza una argumentación y contra argumentación adecuadas, aunque no se comparta el punto de vista del autor?</li>
                                </ul>
                            </li>
                            <li>6. RESPALDO BIBLIOHEMEROGRAFICO
                                <ul>
                                    <li>a. Notas a pie de página</li>
                                    <li>¿Las notas a pie de página son suficientes y pertinentes?</li>
                                    <li>Las notas a pie de página deben cumplir con dos funciones: indicar el apoyo bibliohemerográfico de la argumentación, así como ampliar ideas y referencias sobre el tema.</li>
                                    <li>b. Bibliohemerografía</li>
                                    <li>¿Las referencias bibliohemerográficas son suficientes para dar sustento al trabajo? ¿La Bibliohemerografía utilizada está actualizada?</li>
                                </ul>
                            </li>
                            <li>7. EVALUACIÓN
                                <ul>
                                    <li>Positivo ( )</li>
                                    <li>No positivo ( )</li>
                                    <li>Resultado condicionado a correcciones del autor ( )</li>
                                    <li>Aceptación de publicación ( )</li>
                                    <li>EN SU CASO, INDICAR CUÁLES SERÍAN LAS CORRECCIONES A HACER EN RELACIÓN CON LOS APARTADOS 4, 5 Y 6 FECHA, NOMBRE, GRADO, INSTITUCIÓN DE ADSCRIPCIÓN Y FIRMA DEL DICTAMINADOR.</li>
                                </ul>
                            </li>
                        </ul>
                        <h4>Agradecimiento a dictaminador</h4>
                        <p>FACULTAD DE ESTUDIOS SUPERIORES ACATLÁN ÁREA Oficio FESA/ / / ASUNTO: Constancia. AL DICTAMINADOR, P r e s e n t e. Por este conducto me permito agradecer a usted su valiosa colaboración al elaborar el dictamen del libro: Nombre del libro. Sus sugerencias y comentarios contribuyeron a mejorar dicho material y así proponer su publicación. Sin otro particular, aprovecho la ocasión para enviarle un cordial saludo.</p>
                        <p>A T E N T A M E N T E “POR MI RAZA HABLARÁ EL ESPÍRITU” Santa Cruz Acatlán, Estado de México, a FECHA. Responsable de área Nombre</p>

                    </div>
                </div>
            </div>


            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFourteen">
                    <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
Anexo 3: Ruta crítica para publicación        </a>
      </h4>
                </div>
                <div id="collapseFourteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFourteen">
                    <div class="panel-body">
                        <ul class="lista-con-espacio">
                            <li>Autor</li>
                            <p>Entrega el archivo electrónico e impresión del material, que se propone para editar, a la División, Coordinación o Jefatura de Programa.</p>
                            <li>Jefatura de Programa</li>
                            <p>Expone el material como propuesta a publicar al pleno del Comité Editorial Interno.</p>
                            <li>Comité Editorial Interno</li>
                            <p>Asigna avales para el arbitraje de la obra.</p>
                            <li>Secretario del Comité Editorial Interno</li>
                            <p>Envía los materiales a los avales para que los dictaminen.</p>
                            <li>Aval</li>
                            <p>Dictamina el material de acuerdo a la guía que se le proporciona.</p>
                            <li>Secretario del Comité Editorial Interno</li>
                            <p>Recibe y reúne los dictámenes de las diferentes materiales para exponerlos al pleno del Comité Editorial Interno.</p>
                            <li>Comité Editorial Interno</li>
                            <p>Revisa los dictámenes obtenidos y actúa en consecuencia:</p>
                            <p>positivos - aprueba el material para su publicación;</p>
                            <p>negativos -- rechaza el material y lo regresa al autor para que realice las posibles correcciones o modificaciones que sugieran los dictaminadores.</p>
                            <li>Autor</li>
                            <p>Recibe el material por parte de la División para que actúe en consecuencia a las observaciones del dictaminador.</p>
                            <p>Reintegra a la División el material corregido.</p>
                            <li>Comité Editorial Interno</li>
                            <p>Verifica que el material haya sido modificado según las recomendaciones del dictamen.</p>
                            <li>Secretario del Comité</li>
                            <p>Envía el material al aval para un nuevo dictamen.</p>
                            <li>Aval</li>
                            <p>Dictamina nuevamente el material de acuerdo a la guía que se les proporciona.</p>
                            <li>Secretario del Comité</li>
                            <p>Recibe y reúne los dictámenes del material que se reenvió a los dictaminadores que sugirieron algún arreglo al material y los expone al pleno del Comité Editorial Interno.</p>
                            <li>Comité Editorial Interno</li>
                            <p>Verifica que los dictámenes sean positivos, de ser así aprueba el material para su publicación.</p>
                            <li>División ó Coordinación</li>
                            <p>Envía al Secretario Ejecutivo del Comité Editorial de la Facultad los materiales con la propuesta para ser presentados en sesión de Comité.</p>
                            <li>Secretario Ejecutivo del Comité</li>
                            <p>Recibe de la División, Coordinación o Programa correspondiente los materiales con la propuesta para ser presentados en sesión de Comité.</p>
                            <p>Reúne los materiales que serán presentados en las sesiones de Comité Editorial de la Facultad.</p>
                            <p>Convoca a sesión ordinaria o extraordinaria de Comité, para someter al pleno del mismo las propuestas recibidas.</p>
                            <li>Comité Editorial de la Facultad</li>
                            <p>Revisa la situación de los materiales enviados como propuestas para publicación, mismos que puede aprobar o rechazar</p>
                            <li>Secretario Ejecutivo del Comité</li>
                            <p>Envía el material aprobado a la Unidad de Servicios Editoriales y el material rechazado a la División, Coordinación o Programa correspondiente para lo conducente.</p>
                            <li>Unidad de Servicios Editoriales</li>
                            <p>Recibe el material para su revisión y determina las características de formato en que se realizará la obra.</p>
                            <p>Envía el material al Departamento de Tipografía y Diseño con una relación y propuesta de formato en que se realizará la obra.</p>
                            <p>Envía a los autores de las obras recibidas un oficio comunicándoles que su obra ha sido aprobada para su edición y posterior impresión y encuadernado, solicitando también su presencia en el Departamento de Tipografía y Diseño.</p>
                            <p>Recibe el material y una relación del mismo con la propuesta de formato en el que se realizará la obra. Una vez concluida notifica al Secretario Ejecutivo del Comité Editorial su conclusión.</p>
                            <li>Secretario Técnico del Comité Editorial</li>
                            <p>Determina el precio de tapa según lineamientos marcados por el Comité Editorial de la Universidad Nacional Autónoma de México.</p>
                            <p>Solicita a librería recoger las publicaciones y envía oficio acompañado de un ejemplar a la División correspondiente.</p>
                            <p>Informa en sesión de Comité Editorial la conclusión y la entrega al autor de la publicación.</p>
                        </ul>

                    </div>
                </div>
            </div>








        </div>
    </div>

 <?php get_footer(); ?>
