/**
 * Função assíncrona para buscar informações de endereço a partir de um CEP
 * @param {string|number} cep - CEP a ser consultado
 * @returns {Promise<Object>} Objeto com os dados do endereço
 * @throws {Error} Erro quando CEP é inválido, não encontrado ou ocorre problema de rede
 */
async function buscarCEP(cep) {
	try {
		const cepLimpo = String(cep).replace(/\D/g, "");
		if (cepLimpo.length !== 8) {
			throw new Error("CEP deve conter exatamente 8 dígitos");
		}
		const response = await fetch(`https://viacep.com.br/ws/${cepLimpo}/json/`);
		if (!response.ok) {
			throw new Error(`Erro na requisição: ${response.status} ${response.statusText}`);
		}
		const dados = await response.json();
		if (dados.erro) {
			throw new Error("CEP não encontrado");
		}
		return dados;
	} catch (error) {
		if (error.name === "TypeError" && error.message.includes("fetch")) {
			throw new Error("Erro de conexão. Verifique sua internet e tente novamente.");
		}
		throw error;
	}
}
export default buscarCEP;
