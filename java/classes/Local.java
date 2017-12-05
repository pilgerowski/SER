package classes;

public class Local

{
	private String nome;
	private String localizacao;
	private String notas;

	public Local(String nome) {
		this.setNome(nome);
		this.setLocalizacao("");
		this.setNotas("");	
	}
	
	public Local(String nome, String localizacao, String notas) {
		this.setNome(nome);
		this.setLocalizacao(localizacao);
		this.setNotas(notas);
	}

	public void setNome(String nome) {
		this.nome = nome;
	}

	public String getNome() {
		return this.nome;
	}

	public void setLocalizacao(String localizacao) {
		this.localizacao = localizacao;
	}

	public String getLocalizacao() {
		return this.localizacao;
	}

	public void setNotas(String notas) {
		this.notas = notas;
	}

	public String getNotas() {
		return this.notas;
	}
}
