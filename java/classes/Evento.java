package classes;

import java.util.Date;

public class Evento

{
	private String nome;
	private Date data;
	private Local local;

	public Evento(String nome, Date data, Local local) {
		this.setNome(nome);
		this.setData(data);
		this.setLocal(local);
	}

	public void setNome(String nome) {
		this.nome = nome;
	}

	public String getNome() {
		return this.nome;
	}

	public void setData(Date data) {
		this.data = data;
	}

	public Date getData() {
		return this.data;
	}

	public void setLocal(Local local) {
		this.local = local;
	}

	public Local getLocal() {
		return this.local;
	}
}