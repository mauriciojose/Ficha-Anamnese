<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha Anamnese</title>
    <link rel="stylesheet" href="css/anamnese.css">
    <script defer src="js/anamnese.js"></script>
</head>
<body>
    <page size='A4'>
        <header>
            <div class="cabecalho">
                <div class="img">
                    <img src="assets/nana.jpg" alt="">
                </div>
                <div class="text">FICHA ANAMNESE</div>
            </div>  
            <div class="informacoes">
                <div class="item">
                    <div class="informacao">
                        <span>Nome:</span><input type="text" name="">
                    </div>
                    <div class="informacao">
                        <span>Data de Nascimento:</span><input type="text" name="">
                    </div>
                </div>
            </div>  
            <div class="informacoes">
                <div class="item">
                    <div class="informacao">
                        <span>Endereço:</span><input type="text" name="">
                    </div>
                    <div class="informacao">
                        <span>Telefone:</span><input type="text" name="">
                    </div>
                </div>
            </div>  
            <div class="informacoes">
                <div class="item">
                    <div class="informacao">
                        <span>Profissão:</span><input type="text" name="">
                    </div>
                    <div class="informacao">
                        <span>Trabalha qts horas por dia:</span><input type="text" name="">
                    </div>
                </div>
            </div>  
            <div class="informacoes">
                <div class="item">
                    <div class="informacao">
                        <span>Estatura:</span><input type="text" name="">
                    </div>
                    <div class="informacao">
                        <span>Peso:</span><input type="text" name="">
                    </div>
                </div>
            </div>      
            <div class="informacoes">
                <div class="item">
                    <div class="informacao">
                        <span>E-mail:</span><input type="text" name="">
                    </div>
                </div>
            </div>      
        </header>
        <form id="formAnamnese">
            <div class="form-row">
                <label for="">1. Prática atividade física?</label>
                <div class="form-group">
                    <input type="radio" name='atividadeFisica' value="0" class="form-input-radio formDisplay"><span>Sim</span>
                    <input type="radio" name='atividadeFisica' value="1" class="form-input-radio formDisplay"><span>Não</span>
                </div>
            </div>
            <div class="form-row none atividadeFisica">
                <label for="">1.1 Qual modalidade?</label>
                <input type="text" name='' class="form-input-text">
            </div>
            <div class="form-row">
                <label for="">2. Sente algumas dessas sensações quando faz exercícios?</label>
                <div class="form-group">
                    <input type="checkbox" name='sensacao' class="form-input-checkbox"><span>Tontura</span>
                    <input type="checkbox" name='sensacao' class="form-input-checkbox"><span>Enjoou</span>
                    <input type="checkbox" name='sensacao' class="form-input-checkbox"><span>Mal Estar</span>
                    <input type="checkbox" name='sensacao' class="form-input-checkbox"><span>Outro?</span>
                </div>
            </div>
            <div class="form-row">
                <label for="">3. Faz quantas refeições por dia ?</label>
                <select name="refeicoes" id="refeicoes">
                    <option value="0">Nenhuma Refeição</option>
                    <option value="1">Uma Refeição</option>
                    <option value="2">Duas Refeições</option>
                    <option value="3">Três Refeições</option>
                    <option value="4">Quatro Refeições</option>
                    <option value="5">Cinco Refeições</option>
                    <option value="6">Seis Refeições</option>
                    <option value="7">Sete Refeições</option>
                    <option value="8">Oito Refeições</option>
                    <option value="9">Nove Refeições</option>
                    <option value="-1">Mais Que Nove</option>
                </select>
            </div>
            <div class="form-row">
                <label for="">4. Bebe quantos litros de água por dia aproximadamente?</label>
                <select name="litrosAgua" id="litrosAgua">
                    <option value="0">Nenhum Litro</option>
                    <option value="1">Um Litro</option>
                    <option value="2">Dois Litros</option>
                    <option value="3">Três Litros</option>
                    <option value="4">Quatro Litros</option>
                    <option value="5">Cinco Litros</option>
                    <option value="6">Seis Litros</option>
                    <option value="7">Sete Litros</option>
                    <option value="8">Oito Litros</option>
                    <option value="9">Nove Litros</option>
                    <option value="-1">Mais Que Nove</option>
                </select>
            </div>
            <div class="form-row">
                <label for="">5. Faz dieta ou suplementação? </label>
                <div class="form-group">
                    <input type="radio" name='dietaSuplementacao' value="0" class="form-input-radio formDisplay"><span>Sim</span>
                    <input type="radio" name='dietaSuplementacao' value="1" class="form-input-radio formDisplay"><span>Não</span>
                </div>
            </div>
            <div class="form-row none dietaSuplementacao">
                <label for="">5.1 Comente</label>
                <input type="text" name='' class="form-input-text">
            </div>
            <div class="form-row">
                <label for="">6. Consome bebidas alcoólicas?</label>
                <select name="bebidaAlcoolica" id="bebidaAlcoolica">
                    <option value="0">Não consome bebida alcoólicas</option>
                    <option value="1">Diariamente</option>
                    <option value="2">1x por semana</option>
                    <option value="3">2x por semana</option>
                    <option value="4">1x por mês</option>
                    <option value="5">2x po rmês</option>
                </select>
            </div>
            <div class="form-row">
                <label for="">7. Dorme quantas horas por noite ?</label>
                <select name="horasDormidas" id="horasDormidas">
                    <option value="0">Nenhuma Hora</option>
                    <option value="1">Uma Hora</option>
                    <option value="2">Duas Horas</option>
                    <option value="3">Três Horas</option>
                    <option value="4">Quatro Horas</option>
                    <option value="5">Cinco Horas</option>
                    <option value="6">Seis Horas</option>
                    <option value="7">Sete Horas</option>
                    <option value="8">Oito Horas</option>
                    <option value="9">Nove Horas</option>
                    <option value="10">Dez Horas</option>
                    <option value="-1">Mais Que Dez</option>
                </select>
            </div>
            <div class="form-row">
                <label for="">8. Fuma? </label>
                <div class="form-group">
                    <input type="radio" name='fumante' value='0' class="form-input-radio formDisplay"><span>Sim</span>
                    <input type="radio" name='fumante' value='1' class="form-input-radio formDisplay"><span>Não</span>
                </div>
            </div>
            <div class="form-row none fumante">
                <label for="">8.1 Quantos cigarros por dia?</label>
                <input type="text" name='' class="form-input-text">
            </div>
            <div class="form-row none fumante">
                <label for="">8.2 Se parou, há quanto tempo</label>
                <input type="text" name='' class="form-input-text">
            </div>
            <div class="form-row">
                <label for="">9. Possue colesterol alto? Se souber os valores, preencha</label>
                <div class="form-group">
                    <input type="radio" name='colesterol' value='0' class="form-input-radio formDisplay"><span>Sim</span>
                    <input type="radio" name='colesterol' value='1' class="form-input-radio formDisplay"><span>Não</span>
                </div>
            </div>
            <div class="form-row none colesterol">
                <label for="">HDL</label>
                <input type="text" name='' class="form-input-text">
            </div>
            <div class="form-row none colesterol">
                <label for="">LDL</label>
                <input type="text" name='' class="form-input-text">
            </div>
            <div class="form-row">
                <label for="">10. Possue triglicérides alto?</label>
                <div class="form-group">
                    <input type="radio" name='trigliceredes' value='0' class="form-input-radio"><span>Sim</span>
                    <input type="radio" name='trigliceredes' value='1' class="form-input-radio"><span>Não</span>
                </div>
            </div>
            <div class="form-row">
                <label for="">11. É diabético?</label>
                <div class="form-group">
                    <input type="radio" name='diabetico' value='0' class="form-input-radio formDisplay"><span>Sim</span>
                    <input type="radio" name='diabetico' value='1' class="form-input-radio formDisplay"><span>Não</span>
                </div>
            </div>
            <div class="form-row none diabetico">
                <div class="form-group">
                    <input type="radio" name='tipoDiabetico' value='1' class="form-input-radio formDisplay"><span>Tipo I</span>
                    <input type="radio" name='tipoDiabetico' value='2' class="form-input-radio formDisplay"><span>Tipo II</span>
                </div>
            </div>

            <div class="form-row">
                <label for="">12. É hipertenso?</label>
                <div class="form-group">
                    <input type="radio" name='hipertenso' value='0' class="form-input-radio"><span>Sim</span>
                    <input type="radio" name='hipertenso' value='1' class="form-input-radio"><span>Não</span>
                </div>
            </div>
            <div class="form-row">
                <label for="">13. Possue alguma alteração cardíaca?</label>
                <div class="form-group">
                    <input type="radio" name='cardiaco' value='0' class="form-input-radio"><span>Sim</span>
                    <input type="radio" name='cardiaco' value='1' class="form-input-radio"><span>Não</span>
                </div>
            </div>
            <div class="form-row">
                <label for="">14. Algum parente com problemas cardíacos?</label>
                <div class="form-group">
                    <input type="radio" name='parenteCardiaco' value='0' class="form-input-radio"><span>Sim</span>
                    <input type="radio" name='parenteCardiaco' value='1' class="form-input-radio"><span>Não</span>
                </div>
            </div>
            <div class="form-row">
                <label for="">15. Tem problemas respiratórios?</label>
                <div class="form-group">
                    <input type="radio" name='respiratorio' value='0' class="form-input-radio"><span>Sim</span>
                    <input type="radio" name='respiratorio' value='1' class="form-input-radio"><span>Não</span>
                </div>
            </div>
            <div class="form-row">
                <label for="">16. Toma algum tipo de medicamento ou droga?</label>
                <div class="form-group">
                    <input type="radio" name='medicamento' value='0' class="form-input-radio"><span>Sim</span>
                    <input type="radio" name='medicamento' value='1' class="form-input-radio"><span>Não</span>
                </div>
            </div>
            <div class="form-row">
                <label for="">17. Tem alguma alergia?</label>
                <div class="form-group">
                    <input type="radio" name='alergia' value='0' class="form-input-radio"><span>Sim</span>
                    <input type="radio" name='alergia' value='1' class="form-input-radio"><span>Não</span>
                </div>
            </div>
            <div class="form-row">
                <label for="">18. Fez alguma cirurgia?</label>
                <div class="form-group">
                    <input type="radio" name='cirurgia' value='0' class="form-input-radio"><span>Sim</span>
                    <input type="radio" name='cirurgia' value='1' class="form-input-radio"><span>Não</span>
                </div>
            </div>
            <div class="form-row">
                <label for="">19. Sente dores na coluna , articulações ou dores musculares?</label>
                <div class="form-group">
                    <input type="radio" name='doresArticulares' value='0' class="form-input-radio formDisplay"><span>Sim</span>
                    <input type="radio" name='doresArticulares' value='1' class="form-input-radio formDisplay"><span>Não</span>
                </div>
            </div>
            <div class="form-row none doresArticulares">
                <label for="">Comente.</label>
                <input type="text" name='' class="form-input-text">
            </div>
            <div class="form-row">
                <label for="">20. Possue algum problema ortopédico diagnosticado?</label>
                <div class="form-group">
                    <input type="radio" name='ortopedico' value='0' class="form-input-radio"><span>Sim</span>
                    <input type="radio" name='ortopedico' value='1' class="form-input-radio"><span>Não</span>
                </div>
            </div>
            <div class="form-row">
                <label for="">21. Tem alguma recomendação ou restrição médica para prática de exercícios?</label>
                <div class="form-group">
                    <input type="radio" name='restricao' value='0' class="form-input-radio"><span>Sim</span>
                    <input type="radio" name='restricao' value='1' class="form-input-radio"><span>Não</span>
                </div>
            </div>
            <div class="form-row">
                <label for="">22. Fez teste de esforço, ergométrico ou ergoespirométrico recentemente ( menos de 1 ano )?</label>
                <div class="form-group">
                    <input type="radio" name='esforco' value='0' class="form-input-radio"><span>Sim</span>
                    <input type="radio" name='esforco' value='1' class="form-input-radio"><span>Não</span>
                </div>
            </div>
            <div class="form-row">
                <label for="">23. Acompanhamento nutricional?</label>
                <div class="form-group">
                    <input type="radio" name='acompanhamentoNutricional' value='0' class="form-input-radio"><span>Sim</span>
                    <input type="radio" name='acompanhamentoNutricional' value='1' class="form-input-radio"><span>Não</span>
                </div>
            </div>
            <div class="form-row">
                <label for="">24. Qual o seu objetivo com a nova prática de exercícios físicos?</label>
                <input type="text" name='' class="form-input-text">
            </div>
            <div class="form-row">
                <label for="">25. Gostaria de fazer algum outro comentário que possa ajudar na montagem do seu programa de treinamento?</label>
                <input type="text" name='' class="form-input-text">
            </div>
        </form>
        <footer>
            Personal Trainer - Ediana Santos <br>
            Cref 014385/ Ba
        </footer>
    </page>
</body>
</html>