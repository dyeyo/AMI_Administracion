function contrato() {
  let nombre = $("#nombre").val();
  let date = new Date();
  let options = {
    weekday: "long",
    year: "numeric",
    month: "long",
    day: "numeric",
  };
  let hora = date.getHours();
  let minuto = date.getMinutes();
  console.log(date.toLocaleDateString("es-MX", options));

  $("#contratocontenedor").html(
    `<div id='contrato'>
        <div id='contenido'>
          <h4>TÉRMINOS Y CONDICIONES DE COMPRA: CONTRATO CELEBRADO EL ${date.toLocaleDateString(
            "es-MX",
            options
          )} ENTRE ${nombre} y LECTOR AMI .</h4>
          <p>Por favor, lea los siguientes términos y condiciones de compra con detenimiento
          (colectivamente, las "Condiciones de Compra"). Estas Condiciones de Compra constituyen
          un acuerdo legal y vinculante entre usted y Lector AMI (la "Compañía") en relación con la
          compra de 1 curso(s) lectura Inteligente (12) mes(es) de duración (el "Curso") ofrecido por
          la Compañía de acuerdo con el interés demostrado por Ud. en su visita a la página web.
          www.lectorami.com. Esta adquisición, está sujeta a los Términos de Servicio
          que se encuentran publicados en la página web de la Compañía, los cuales se consideran parte
          integrante del presente documento.</p>
          PAGO
          <p>Yo, ${nombre} (el "Cliente"), me comprometo hacer un (1) pago por el monto de COP 2.100.000 por 1 Curso
          (s) de lectura (el "Precio de Compra"). Entiendo que el pago debe hacerse a través de los sistemas
          autorizados de la Compañía y los centros de recogida autorizados.
          Entiendo que tengo derecho para rescindir el Curso lector ami y recibir un reembolso del monto pagado, siempre
          y cuando comunique mi solicitud de cancelación dentro de los primeros siete (7) días contados a partir de la
          fecha de mi compra aquí registrada, y así recibir un reembolso total del monto pagado. A estos fines, entiendo
          que esta solicitud de cancelación deberá ser canalizada a través de un asesor de la Compañía por medio de
          llamada telefónica al número 3213202115. Después de transcurridos los siete (7) días antes indicados, los
          montos que han sido pagados no son rembolsables. Por favor tenga en cuenta que los reembolsos solo se
          realizarán a través del instrumento de pago que Ud. ha proporcionado a la Compañía.
          Por favor tenga en cuenta que sus pagos corresponden a una transacción nacional. Por lo tanto la Compañía le
          facturará el Precio de Compra anteriormente definido en base a estos términos y condiciones, en cuyo caso la
          Compañía no es ni será responsable por cualquier tasa, comisión o costo aplicable que pudiese aplicar su
          banco; tampoco por cualquier ganancia o pérdida que pudiere resultar de esta operación en la fecha en
          que se procese el pago.
          </p>
          RENOVACIÓN AUTOMÁTICA
          <p>Después de completar el curso en el mes número 12 (el "período inicial"), Ud. seguirá disfrutando del
          servicio sobre una base mensual de renovaciones automáticas, pagando la fracción mensual equivalente
          a COP 356.862,75 (el "Precio de Renovación") por cada mes. A tal efecto, Ud. acepta que la Compañía
          puede renovar automáticamente su servicio y cargar su instrumento de pago mencionado anteriormente
          con el precio de renovación en el aniversario mensual de su servicio, es decir a los 30 días
          siguientes de la fecha de la última renovación (la "Fecha de Renovación"). El pago de la renovación
          se hará exigible a la fecha de renovación. En caso de que Ud. decida dar por terminado el servicio
          después del período inicial, puede hacerlo enviando una solicitud a un asesor de la Compañía a través
          de llamada telefónica al número antes mencionado. Una vez que la Compañía reciba su solicitud de
          terminación del Servicio, la Compañía cancelará su Contrato de Compra asociado a su cuenta lector
          AMI. La Compañía se reserva el derecho de ajustar el Precio de Renovación en su única y absoluta
          discreción (siempre según lo permitido por la ley).
          Estas Condiciones de Compra se interpretarán de acuerdo con las leyes de colombianas, sin tener en cuenta
          conflictos de principios legales. En caso de que las partes no puedan resolver amistosamente de buena fe
          una disputa en relación con estos Términos de Compra en el transcurso de 15 días, cualquiera de las partes
          podrá someter dicha controversia a un arbitraje vinculante en el centro de conciliación y arbitraje de la
          cámara de comercio, ante un árbitro. El arbitraje se realizará de conformidad con las Normas y
          Procedimientos. El laudo arbitral podrá ser registrado en cualquier tribunal que tenga jurisdicción.
          Esta cláusula no impedirá que las partes busquen un desagravio por mandato judicial en un tribunal
          de jurisdicción apropiada. En la medida en que se permita cualquier litigio conforme a estos Términos
          de Compra. PREGUNTAS
          </p>
          <p>Si usted tiene alguna pregunta o comentario sobre estas condiciones de Compra, por favor, no dude en contactar a un asesor de la Compañía a través de llamada telefónica al número 3213202115 o a través de los medios de contacto publicados en la página web <a href="https://www.lectorami.com" target="_blank">www.lectorami.com</a>.</p>
          <p>NOTIFICACIONES A LECTOR AMI ACADEMIA</p>
          <p>Att: Asuntos Legales y Comerciales</p>
          <p>CARRERA 11 # 22N-10 POPAYAN</p>
          <p>Colombia</p>
          <p><em>Luis Duran</em> * El Suscriptor</p>
          <p><em>LECTOR AMI</em> La Compañía</p>

          <p>*Por firma electrónica a las ${hora}:${minuto} horas del ${date.toLocaleDateString(
      "es-MX",
      options
    )}</p>
          </div>
        </div>`
  );
  $("#contratoInput").html(
    `<textarea style="display: none;" name="contract">TÉRMINOS Y CONDICIONES DE COMPRA: CONTRATO CELEBRADO EL ${date.toLocaleDateString(
      "es-MX",
      options
    )} ENTRE ${nombre} y LECTOR AMI .
      Por favor, lea los siguientes términos y condiciones de compra con detenimiento
      (colectivamente, las "Condiciones de Compra"). Estas Condiciones de Compra constituyen
      un acuerdo legal y vinculante entre usted y Lector AMI (la "Compañía") en relación con la
      compra de 1 curso(s) lectura Inteligente (12) mes(es) de duración (el "Curso") ofrecido por
      la Compañía de acuerdo con el interés demostrado por Ud. en su visita a la página web.
      www.lectorami.com. Esta adquisición, está sujeta a los Términos de Servicio
      que se encuentran publicados en la página web de la Compañía, los cuales se consideran parte
      integrante del presente documento.
      PAGO
      Yo, ${nombre} (el "Cliente"), me comprometo hacer un (1) pago por el monto de COP 2.100.000 por 1 Curso
      (s) de lectura (el "Precio de Compra"). Entiendo que el pago debe hacerse a través de los sistemas
      autorizados de la Compañía y los centros de recogida autorizados.
      Entiendo que tengo derecho para rescindir el Curso lector ami y recibir un reembolso del monto pagado, siempre
      y cuando comunique mi solicitud de cancelación dentro de los primeros siete (7) días contados a partir de la
      fecha de mi compra aquí registrada, y así recibir un reembolso total del monto pagado. A estos fines, entiendo
      que esta solicitud de cancelación deberá ser canalizada a través de un asesor de la Compañía por medio de
      llamada telefónica al número 3213202115. Después de transcurridos los siete (7) días antes indicados, los
      montos que han sido pagados no son rembolsables. Por favor tenga en cuenta que los reembolsos solo se
      realizarán a través del instrumento de pago que Ud. ha proporcionado a la Compañía.
      Por favor tenga en cuenta que sus pagos corresponden a una transacción nacional. Por lo tanto la Compañía le
      facturará el Precio de Compra anteriormente definido en base a estos términos y condiciones, en cuyo caso la
      Compañía no es ni será responsable por cualquier tasa, comisión o costo aplicable que pudiese aplicar su
      banco; tampoco por cualquier ganancia o pérdida que pudiere resultar de esta operación en la fecha en
      que se procese el pago.
      RENOVACIÓN AUTOMÁTICA
      Después de completar el curso en el mes número 12 (el "período inicial"), Ud. seguirá disfrutando del
      servicio sobre una base mensual de renovaciones automáticas, pagando la fracción mensual equivalente
      a COP 356.862,75 (el "Precio de Renovación") por cada mes. A tal efecto, Ud. acepta que la Compañía
      puede renovar automáticamente su servicio y cargar su instrumento de pago mencionado anteriormente
      con el precio de renovación en el aniversario mensual de su servicio, es decir a los 30 días
      siguientes de la fecha de la última renovación (la "Fecha de Renovación"). El pago de la renovación
      se hará exigible a la fecha de renovación. En caso de que Ud. decida dar por terminado el servicio
      después del período inicial, puede hacerlo enviando una solicitud a un asesor de la Compañía a través
      de llamada telefónica al número antes mencionado. Una vez que la Compañía reciba su solicitud de
      terminación del Servicio, la Compañía cancelará su Contrato de Compra asociado a su cuenta lector
      AMI. La Compañía se reserva el derecho de ajustar el Precio de Renovación en su única y absoluta
      discreción (siempre según lo permitido por la ley).
      Estas Condiciones de Compra se interpretarán de acuerdo con las leyes de colombianas, sin tener en cuenta
      conflictos de principios legales. En caso de que las partes no puedan resolver amistosamente de buena fe
      una disputa en relación con estos Términos de Compra en el transcurso de 15 días, cualquiera de las partes
      podrá someter dicha controversia a un arbitraje vinculante en el centro de conciliación y arbitraje de la
      cámara de comercio, ante un árbitro. El arbitraje se realizará de conformidad con las Normas y
      Procedimientos. El laudo arbitral podrá ser registrado en cualquier tribunal que tenga jurisdicción.
      Esta cláusula no impedirá que las partes busquen un desagravio por mandato judicial en un tribunal
      de jurisdicción apropiada. En la medida en que se permita cualquier litigio conforme a estos Términos
      de Compra. PREGUNTAS
      Si usted tiene alguna pregunta o comentario sobre estas condiciones de Compra, por favor, no dude en
      contactar a un asesor de la Compañía a través de llamada telefónica al número 3213202115 o a través de
      los medios de contacto publicados en la página web www.lectorami.com.
      NOTIFICACIONES A LECTOR AMI ACADEMIA
      Att: Asuntos Legales y Comerciales
      CARRERA 11 # 22N-10 POPAYAN
      Colombia
      Luis Duran * El Suscriptor
      LECTOR AMI La Compañía

      *Por firma electrónica a las ${hora}:${minuto} horas del ${date.toLocaleDateString(
      "es-MX",
      options
    )}</textarea>`
  );
}

function contratoCutoas() {
  let nombre = $("#nombre").val();
  let date = new Date();
  let options = {
    weekday: "long",
    year: "numeric",
    month: "long",
    day: "numeric",
  };
  let hora = date.getHours();
  let minuto = date.getMinutes();
  console.log(date.toLocaleDateString("es-MX", options));

  $("#contratocontenedor").html(
    `<div id='contrato'>
        <div id='contenido'>
          <h4>TÉRMINOS Y CONDICIONES DE COMPRA: CONTRATO CELEBRADO EL ${date.toLocaleDateString(
            "es-MX",
            options
          )} ENTRE ${nombre} y LECTOR AMI .</h4>
          <p>Por favor, lea los siguientes términos y condiciones de compra
          con detenimiento (colectivamente, las &quot;Condiciones de Compra&quot;).
          Estas Condiciones de Compra constituyen un acuerdo legal y
          vinculante entre usted y Lector AMI (la &quot;Compañía&quot;) en relación
          con la compra de un programa(s) lectura Inteligente de conexión
          por doce (12) mes(es) de duración (el &quot;Programa&quot;) ofrecido por la
          Compañía de acuerdo con el interés demostrado por Ud. en su
          visita a la página web www.lectorami.com y/o Redes Sociales.
          Esta adquisición, está sujeta a los Términos de Servicio que se
          encuentran publicados en la página web de la Compañía, los
          cuales se consideran parte integrante del presente documento.</p>
            <h5>PAGO</h5>
            <p>Yo, ${nombre} (el &quot;Cliente&quot;), me comprometo hacer un (1) pago por el
            monto de COP $340.000 por 1 programa de lectura (el &quot;Precio de
            Matricula&quot;). Entiendo que el pago debe hacerse a través de los
            sistemas autorizados de la Compañía y los centros de recogida
            autorizados Y Siete (7) Mensualidades de $322.900 consecutivas
            (30) treinta días después del primer pago. Estas cuotas no
            podrán ser interrumpidas, dado que este es un crédito
            desembolsado hacia usted, una vez recibido y aceptado no se
            puede anular, y que este documento ; Entiendo que tengo
            derecho para rescindir el Curso lector Ami y recibir un reembolso
            del monto pagado, siempre y cuando comunique mi solicitud de
            cancelación dentro de los primeros siete (7) días contados a
            partir de la fecha de mi compra aquí registrada, y así recibir un
            reembolso total del monto pagado. esta devolución esta sujeta a

            que la persona inicie el programa y este no cumpla con las
            expectativas planteadas. A estos fines, entiendo que esta
            solicitud de cancelación deberá ser canalizada a través de un
            asesor de la Compañía por medio de llamada telefónica al
            número 3213202115. Después de transcurridos los siete (7) días
            antes indicados, los montos que han sido pagados no son
            reembolsables. Por favor tenga en cuenta que los reembolsos
            solo se realizarán a través del instrumento de pago que Ud. ha
            proporcionado a la Compañía.</p>

            <p>Por favor tenga en cuenta que sus pagos corresponden a una
            transacción nacional. Por lo tanto la Compañía le facturará el
            Precio de Compra anteriormente definido en base a estos
            términos y condiciones, en cuyo caso la Compañía no es ni será
            responsable por cualquier tasa, comisión o costo aplicable que
            pudiese aplicar su banco; tampoco por cualquier ganancia o
            pérdida que pudiere resultar de esta operación en la fecha en que
            se procese el pago.</p>

            <h5>RENOVACIÓN AUTOMÁTICA</h5>

            <p>Después de completar el programa en el mes número 12 (el
              &quot;período inicial&quot;), Ud. seguirá disfrutando del servicio sobre una
              base mensual de renovaciones automáticas, pagando la fracción
              mensual equivalente a COP 356.862,75 (el &quot;Precio de
              Renovación&quot;) por cada mes. A tal efecto, Ud. acepta que la
              Compañía puede renovar automáticamente su servicio y cargar
              su instrumento de pago mencionado anteriormente con el precio
              de renovación, es decir a los 30 días siguientes de la fecha de la
              última renovación (la &quot;Fecha de Renovación&quot;). El pago de la
              renovación se hará exigible a la fecha de renovación. En caso de
              que Ud. decida dar por terminado el servicio después del período
              inicial, puede hacerlo enviando una solicitud a un asesor de la
              Compañía a través de llamada telefónica al número antes
              mencionado. Una vez que la Compañía reciba su solicitud de
              terminación del Servicio, la Compañía cancelará su Contrato de
              Compra asociado a su cuenta lector AMI. La Compañía se

              reserva el derecho de ajustar el Precio de Renovación en su
              única y absoluta discreción (siempre según lo permitido por la
              ley).</p>

            <p>Estas Condiciones de Compra se interpretarán de acuerdo con
            las leyes de colombianas, sin tener en cuenta conflictos de
            principios legales. En caso de que las partes no puedan resolver
            amistosamente de buena fe una disputa en relación con estos
            Términos de Compra en el transcurso de 15 días, cualquiera de
            las partes podrá someter dicha controversia a un arbitraje
            vinculante en el centro de conciliación y arbitraje de la cámara de
            comercio, ante un árbitro. El arbitraje se realizará de conformidad
            con las Normas y Procedimientos. El laudo arbitral podrá ser
            registrado en cualquier tribunal que tenga jurisdicción. Esta
            cláusula no impedirá que las partes busquen un desagravio por
            mandato judicial en un tribunal de jurisdicción apropiada. En la
            medida en que se permita cualquier litigio conforme a estos
            Términos de Compra. PREGUNTAS
            Si usted tiene alguna pregunta o comentario sobre estas
            condiciones de Compra, por favor, no dude en contactar a un
            asesor de la Compañía a través de llamada telefónica al número
            3213202115 o a través de los medios de contacto publicados en
            la página web <a href="www.lectorami.com." target="_blank">www.lectorami.com.</a>
            </p>
            <p>NOTIFICACIONES A LECTOR AMI ACADEMIA</p>
            <p>Att: Asuntos Legales y Comerciales</p>
            <p>CARRERA 11 # 22N-10 POPAYAN</p>
            <p>Colombia</p>
            <p><em>Luis Duran</em> * El Suscriptor</p>
            <p><em>LECTOR AMI</em> La Compañía</p>
            <p>*Por firma electrónica a las ${hora}:${minuto} horas del ${date.toLocaleDateString(
      "es-MX",
      options
    )}</p>
          </div>
        </div>`
  );
  $("#contratoInput").html(
    `<textarea style="display: none;" name="contract"><h4>TÉRMINOS Y CONDICIONES DE COMPRA: CONTRATO CELEBRADO EL 11 DE ABRIL DE 2020 ENTRE ${nombre} y LECTOR AMI .</h4>
      <p></p>Por favor, lea los siguientes términos y condiciones de compra con detenimiento (colectivamente, las
      "Condiciones de Compra"). Estas Condiciones de Compra constituyen un acuerdo legal y vinculante entre usted
      y Lector AMI (la "Compañía") en relación con la compra de 1 curso(s) lectura Inteligente (12) mes(es) de
      duración (el "Curso") ofrecido por la Compañía de acuerdo con el interés demostrado por Ud. en su visita a
      la página web www.lectorami.com. Esta adquisición, está sujeta a los Términos de Servicio que se encuentran
      publicados en la página web de la Compañía, los cuales se consideran parte integrante del presente documento.
      PAGO
      Yo, ${nombre} (el "Cliente"), me comprometo hacer un (1) pago por el monto de COP $340.000 por 1 programa de lectura (el "Precio de Compra"). Entiendo que el pago debe hacerse a través de los sistemas autorizados de la Compañía y los centros de recogida autorizados Y Siete (7) Mensualidades de $322.900 consecutivas (30) treinta días después del primer pago.

      Entiendo que tengo derecho para rescindir el Curso lector ami y recibir un reembolso del monto pagado,
      siempre y cuando comunique mi solicitud de cancelación dentro de los primeros siete (7) días contados a partir
      de la fecha de mi compra aquí registrada, y así recibir un reembolso total del monto pagado. A estos fines,
      entiendo que esta solicitud de cancelación deberá ser canalizada a través de un asesor de la Compañía por medio
      de llamada telefónica al número 3213202115. Después de transcurridos los siete (7) días antes indicados, los montos
      que han sido pagados no son rembolsables. Por favor tenga en cuenta que los reembolsos solo se realizarán a
      través del instrumento de pago que Ud. ha proporcionado a la Compañía.

      Por favor tenga en cuenta que sus pagos corresponden a una transacción nacional. Por lo tanto la Compañía le
      facturará el Precio de Compra anteriormente definido en base a estos términos y condiciones, en cuyo caso la
      Compañía no es ni será responsable por cualquier tasa, comisión o costo aplicable que pudiese aplicar su banco;
      tampoco por cualquier ganancia o pérdida que pudiere resultar de esta operación en la fecha en que se procese el
      pago.
      RENOVACIÓN AUTOMÁTICA
      Después de completar el curso en el mes número 12 (el "período inicial"), Ud. seguirá disfrutando del servicio
      sobre una base mensual de renovaciones automáticas, pagando la fracción mensual equivalente a COP 356.862,75
      (el "Precio de Renovación") por cada mes. A tal efecto, Ud. acepta que la Compañía puede renovar automáticamente
      su servicio y cargar su instrumento de pago mencionado anteriormente con el precio de renovación en el aniversario
      mensual de su servicio, es decir a los 30 días siguientes de la fecha de la última renovación
      (la "Fecha de Renovación"). El pago de la renovación se hará exigible a la fecha de renovación. En caso de que Ud.
      decida dar por terminado el servicio después del período inicial, puede hacerlo enviando una solicitud a un asesor
      de la Compañía a través de llamada telefónica al número antes mencionado. Una vez que la Compañía reciba su
      solicitud de terminación del Servicio, la Compañía cancelará su Contrato de Compra asociado a su cuenta lector AMI.
      La Compañía se reserva el derecho de ajustar el Precio de Renovación en su única y absoluta discreción
      (siempre según lo permitido por la ley).

      Estas Condiciones de Compra se interpretarán de acuerdo con las leyes de colombianas, sin tener en cuenta
      conflictos de principios legales. En caso de que las partes no puedan resolver amistosamente de buena fe una
      disputa en relación con estos Términos de Compra en el transcurso de 15 días, cualquiera de las partes podrá
      someter dicha controversia a un arbitraje vinculante en el centro de conciliación y arbitraje de la cámara de
      comercio, ante un árbitro. El arbitraje se realizará de conformidad con las Normas y Procedimientos. El laudo
      arbitral podrá ser registrado en cualquier tribunal que tenga jurisdicción. Esta cláusula no impedirá que
      las partes busquen un desagravio por mandato judicial en un tribunal de jurisdicción apropiada. En la medida
      en que se permita cualquier litigio conforme a estos Términos de Compra. PREGUNTAS
      Si usted tiene alguna pregunta o comentario sobre estas condiciones de Compra, por favor, no dude en contactar
      a un asesor de la Compañía a través de llamada telefónica al número 3213202115 o a través de los medios de
      contacto publicados en la página web www.lectorami.com.
      NOTIFICACIONES A LECTOR AMI ACADEMIA
      Att: Asuntos Legales y Comerciales
      CARRERA 11 # 22N-10 POPAYAN
      Colombia
      Luis Duran * El Suscriptor
      LECTOR AMI La Compañía
      *Por firma electrónica a las ${hora}:${minuto} horas del ${date.toLocaleDateString(
      "es-MX",
      options
    )}
      </textarea>`
  );
}

function contrato1600() {
  let nombre = $("#nombre").val();
  let date = new Date();
  let options = {
    weekday: "long",
    year: "numeric",
    month: "long",
    day: "numeric",
  };
  let hora = date.getHours();
  let minuto = date.getMinutes();
  console.log(date.toLocaleDateString("es-MX", options));

  $("#contratocontenedor").html(
    `<div id='contrato'>
        <div id='contenido'>
          <h4>TÉRMINOS Y CONDICIONES DE COMPRA: CONTRATO CELEBRADO EL ${date.toLocaleDateString(
            "es-MX",
            options
          )} ENTRE ${nombre} y LECTOR AMI .</h4>
          <p>Por favor, lea los siguientes términos y condiciones de compra
          con detenimiento (colectivamente, las &quot;Condiciones de Compra&quot;).
          Estas Condiciones de Compra constituyen un acuerdo legal y
          vinculante entre usted y Lector AMI (la &quot;Compañía&quot;) en relación
          con la compra de 1 Programa(s) lectura Inteligente por (12)
          mes(es) de Conexión (el &quot;Programa&quot;) ofrecido por la Compañía
          de acuerdo con el interés demostrado por Ud. en su visita a la
          página web. www.marketing.lectorami.co. Esta adquisición, está
          sujeta a los Términos de Servicio que se encuentran publicados
          en correo electrónico enviado por la Compañía, los cuales se
          consideran parte integrante del presente documento.</p>
          PAGO
          <p>Yo, ${nombre} (el &quot;Cliente&quot;), me comprometo hacer un (1) pago por el
          monto de COP 1.600.000 por 1 Programa (s) de lectura (el
          &quot;Precio de Compra&quot;). Entiendo que el pago debe hacerse a
          través de los sistemas autorizados de la Compañía y los centros
          de recogida autorizados. Entiendo que tengo derecho para
          rescindir el Programa lector Ami y recibir un reembolso del monto
          pagado, siempre y cuando comunique mi solicitud de cancelación
          dentro de los primeros siete (7) días contados a partir de la fecha
          de mi compra aquí registrada, y así recibir un reembolso total del
          monto pagado. Esta devolución esta sujeta a que la persona
          inicie el programa y este no cumpla con las expectativas
          planteadas, entiendo que esta solicitud de cancelación deberá
          ser canalizada a través de un asesor de la Compañía por medio
          de llamada telefónica al número 3213202115. Después de
          transcurridos los siete (7) días antes indicados, los montos que
          han sido pagados no son reembolsables. Por favor tenga en
          cuenta que los reembolsos solo se realizarán a través del
          instrumento de pago que Ud. ha proporcionado a la Compañía.
          Por favor tenga en cuenta que sus pagos corresponden a una
          transacción nacional. Por lo tanto la Compañía le facturará el
          Precio de Compra anteriormente definido en base a estos
          términos y condiciones, en cuyo caso la Compañía no es ni será
          responsable por cualquier tasa, comisión o costo aplicable que

          pudiese aplicar su banco; tampoco por cualquier ganancia o
          pérdida que pudiere resultar de esta operación en la fecha en que
          se procese el pago.
          </p>
          RENOVACIÓN AUTOMÁTICA
          <p>Después de completar el programa en el mes número 12 (el
            &quot;período inicial&quot;), Ud. seguirá disfrutando del servicio sobre una
            base mensual de renovaciones automáticas, pagando la fracción
            mensual equivalente a COP 356.862,75 (el &quot;Precio de
            Renovación&quot;) por cada mes. A tal efecto, Ud. acepta que la
            Compañía puede renovar automáticamente su servicio y cargar
            su instrumento de pago mencionado anteriormente con el precio
            de renovación en el aniversario mensual de su servicio, es decir a
            los 30 días siguientes de la fecha de la última renovación (la
            &quot;Fecha de Renovación&quot;). El pago de la renovación se hará
            exigible a la fecha de renovación. En caso de que Ud. decida dar
            por terminado el servicio después del período inicial, puede
            hacerlo enviando una solicitud a un asesor de la Compañía a
            través de llamada telefónica al número antes mencionado. Una
            vez que la Compañía reciba su solicitud de terminación del
            Servicio, la Compañía cancelará su Contrato de Compra
            asociado a su cuenta lector AMI. La Compañía se reserva el
            derecho de ajustar el Precio de Renovación en su única y
            absoluta discreción (siempre según lo permitido por la ley). Estas
            Condiciones de Compra se interpretarán de acuerdo con las
            leyes de colombianas, sin tener en cuenta conflictos de principios
            legales. En caso de que las partes no puedan resolver
            amistosamente de buena fe una disputa en relación con estos
            Términos de Compra en el transcurso de 15 días, cualquiera de
            las partes podrá someter dicha controversia a un arbitraje
            vinculante en el centro de conciliación y arbitraje de la cámara de
            comercio, ante un árbitro. El arbitraje se realizará de conformidad
            con las Normas y Procedimientos. El laudo arbitral podrá ser
            registrado en cualquier tribunal que tenga jurisdicción. Esta
            cláusula no impedirá que las partes busquen un desagravio por

            mandato judicial en un tribunal de jurisdicción apropiada. En la
            medida en que se permita cualquier litigio conforme a estos
            Términos de Compra. PREGUNTAS
          </p>
          <p>Si usted tiene alguna pregunta o comentario sobre estas
          condiciones de Compra, por favor, no dude en contactar a un
          asesor de la Compañía a través de llamada telefónica al número
          3213202115 o a través de los medios de contacto publicados en
          la página web <a href="https://www.lectorami.com" target="_blank">www.lectorami.com</a>.</p>
          <p>NOTIFICACIONES A LECTOR AMI ACADEMIA</p>
          <p>Att: Asuntos Legales y Comerciales</p>
          <p>CARRERA 11 # 22N-10 POPAYAN</p>
          <p>Colombia</p>

          <p><em>3213202115</em> LINEA NACIONAL Whatsapp</p>
          <p>* El Suscriptor</p>
          <p><em>LECTOR AMI</em> La Compañía</p>

          <p>*Por firma electrónica a las ${hora}:${minuto} horas del ${date.toLocaleDateString(
      "es-MX",
      options
    )}</p>
          </div>
        </div>`
  );
  $("#contratoInput").html(
    `<textarea style="display: none;" name="contract">TÉRMINOS Y CONDICIONES DE COMPRA: CONTRATO CELEBRADO EL ${date.toLocaleDateString(
      "es-MX",
      options
    )} ENTRE ${nombre} y LECTOR AMI
      Por favor, lea los siguientes términos y condiciones de compra
      con detenimiento (colectivamente, las &quot;Condiciones de Compra&quot;).
      Estas Condiciones de Compra constituyen un acuerdo legal y
      vinculante entre usted y Lector AMI (la &quot;Compañía&quot;) en relación
      con la compra de 1 Programa(s) lectura Inteligente por (12)
      mes(es) de Conexión (el &quot;Programa&quot;) ofrecido por la Compañía
      de acuerdo con el interés demostrado por Ud. en su visita a la
      página web. www.marketing.lectorami.co. Esta adquisición, está
      sujeta a los Términos de Servicio que se encuentran publicados
      en correo electrónico enviado por la Compañía, los cuales se
      consideran parte integrante del presente documento.
      PAGO
      Yo, ${nombre} (el &quot;Cliente&quot;), me comprometo hacer un (1) pago por el
      monto de COP 1.600.000 por 1 Programa (s) de lectura (el
      &quot;Precio de Compra&quot;). Entiendo que el pago debe hacerse a
      través de los sistemas autorizados de la Compañía y los centros
      de recogida autorizados. Entiendo que tengo derecho para
      rescindir el Programa lector Ami y recibir un reembolso del monto
      pagado, siempre y cuando comunique mi solicitud de cancelación
      dentro de los primeros siete (7) días contados a partir de la fecha
      de mi compra aquí registrada, y así recibir un reembolso total del
      monto pagado. Esta devolución esta sujeta a que la persona
      inicie el programa y este no cumpla con las expectativas
      planteadas, entiendo que esta solicitud de cancelación deberá
      ser canalizada a través de un asesor de la Compañía por medio
      de llamada telefónica al número 3213202115. Después de
      transcurridos los siete (7) días antes indicados, los montos que
      han sido pagados no son reembolsables. Por favor tenga en
      cuenta que los reembolsos solo se realizarán a través del
      instrumento de pago que Ud. ha proporcionado a la Compañía.
      Por favor tenga en cuenta que sus pagos corresponden a una
      transacción nacional. Por lo tanto la Compañía le facturará el
      Precio de Compra anteriormente definido en base a estos
      términos y condiciones, en cuyo caso la Compañía no es ni será
      responsable por cualquier tasa, comisión o costo aplicable que

      pudiese aplicar su banco; tampoco por cualquier ganancia o
      pérdida que pudiere resultar de esta operación en la fecha en que
      se procese el pago.

      RENOVACIÓN AUTOMÁTICA
      Después de completar el programa en el mes número 12 (el
        &quot;período inicial&quot;), Ud. seguirá disfrutando del servicio sobre una
        base mensual de renovaciones automáticas, pagando la fracción
        mensual equivalente a COP 356.862,75 (el &quot;Precio de
        Renovación&quot;) por cada mes. A tal efecto, Ud. acepta que la
        Compañía puede renovar automáticamente su servicio y cargar
        su instrumento de pago mencionado anteriormente con el precio
        de renovación en el aniversario mensual de su servicio, es decir a
        los 30 días siguientes de la fecha de la última renovación (la
        &quot;Fecha de Renovación&quot;). El pago de la renovación se hará
        exigible a la fecha de renovación. En caso de que Ud. decida dar
        por terminado el servicio después del período inicial, puede
        hacerlo enviando una solicitud a un asesor de la Compañía a
        través de llamada telefónica al número antes mencionado. Una
        vez que la Compañía reciba su solicitud de terminación del
        Servicio, la Compañía cancelará su Contrato de Compra
        asociado a su cuenta lector AMI. La Compañía se reserva el
        derecho de ajustar el Precio de Renovación en su única y
        absoluta discreción (siempre según lo permitido por la ley). Estas
        Condiciones de Compra se interpretarán de acuerdo con las
        leyes de colombianas, sin tener en cuenta conflictos de principios
        legales. En caso de que las partes no puedan resolver
        amistosamente de buena fe una disputa en relación con estos
        Términos de Compra en el transcurso de 15 días, cualquiera de
        las partes podrá someter dicha controversia a un arbitraje
        vinculante en el centro de conciliación y arbitraje de la cámara de
        comercio, ante un árbitro. El arbitraje se realizará de conformidad
        con las Normas y Procedimientos. El laudo arbitral podrá ser
        registrado en cualquier tribunal que tenga jurisdicción. Esta
        cláusula no impedirá que las partes busquen un desagravio por

        mandato judicial en un tribunal de jurisdicción apropiada. En la
        medida en que se permita cualquier litigio conforme a estos
        Términos de Compra. PREGUNTAS

      Si usted tiene alguna pregunta o comentario sobre estas
      condiciones de Compra, por favor, no dude en contactar a un
      asesor de la Compañía a través de llamada telefónica al número
      3213202115 o a través de los medios de contacto publicados en
      la página web www.lectorami.com.
      NOTIFICACIONES A LECTOR AMI ACADEMIA
      Att: Asuntos Legales y Comerciales
      CARRERA 11 # 22N-10 POPAYAN
      Colombia

      3213202115 LINEA NACIONAL Whatsapp
      * El Suscriptor
      LECTOR AMI La Compañía

      *Por firma electrónica a las ${hora}:${minuto} horas del ${date.toLocaleDateString(
      "es-MX",
      options
    )}</textarea>`
  );
}
