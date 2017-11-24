package classes;

public class UF

{
	/** Attributes */
	private String nome;
	private String sigla;

	public UF() {

	}

	public void UF(String nome, String sigla) {
		this.setNome(nome);
		this.setSigla(sigla);

	}

	public void setNome(String nome) {
		this.nome = nome;
	}

	public String getNome() {
		return this.nome;
	}

	public void setSigla(String sigla) {
		this.sigla = sigla;
	}

	public String getSigla() {
		return this.sigla;

	}
}