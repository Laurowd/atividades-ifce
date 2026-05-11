import React, { useState } from 'react';
import { View, Text, TouchableOpacity, ScrollView, TextInput } from 'react-native';
import styles from '../styles/AreaTreinador';

interface Cliente {
  nome: string;
  email: string;
  telefone: string;
  id: string;
}

interface Exercicio {
  nomeTreino: string;
  nomeExercicio: string;
  area: string;
  peso: string;
  series: string;
  repeticao: string;
}

interface Treino {
  clienteNome: string;
  exercicios: Exercicio[];
}

export default function AreaTreinador({ navigation }: any) {
  const [activeTab, setActiveTab] = useState('clientes');
  const [showForm, setShowForm] = useState(false);
  const [showTreinoForm, setShowTreinoForm] = useState(false);
  const [clientes, setClientes] = useState<Cliente[]>([]);
  const [treinos, setTreinos] = useState<Treino[]>([]);
  const [formData, setFormData] = useState({
    nome: '',
    email: '',
    telefone: '',
    id: ''
  });
  const [treinoFormData, setTreinoFormData] = useState({
    nomeTreino: '',
    nomeExercicio: '',
    area: '',
    peso: '',
    series: '',
    repeticao: ''
  });

  const handleLogout = () => {
    navigation.navigate('Login');
  };

  const handleAddClient = () => {
    setShowForm(true);
  };

  const handleConcluirCadastro = () => {
    if (formData.nome && formData.email && formData.telefone && formData.id) {
      setClientes([...clientes, { ...formData }]);
      setFormData({ nome: '', email: '', telefone: '', id: '' });
      setShowForm(false);
    }
  };

  const handleAddTreino = () => {
    setShowTreinoForm(true);
  };

  const handleFinalizarTreino = () => {
    if (treinoFormData.nomeTreino && treinoFormData.nomeExercicio && treinoFormData.area && 
        treinoFormData.peso && treinoFormData.series && treinoFormData.repeticao) {
      const novoTreino: Treino = {
        clienteNome: treinoFormData.nomeTreino,
        exercicios: [{
          nomeTreino: treinoFormData.nomeTreino,
          nomeExercicio: treinoFormData.nomeExercicio,
          area: treinoFormData.area,
          peso: treinoFormData.peso,
          series: treinoFormData.series,
          repeticao: treinoFormData.repeticao
        }]
      };
      setTreinos([...treinos, novoTreino]);
      setTreinoFormData({ nomeTreino: '', nomeExercicio: '', area: '', peso: '', series: '', repeticao: '' });
      setShowTreinoForm(false);
    }
  };

  return (
    <View style={styles.container}>
      {/* Header */}
      <View style={styles.header}>
      </View>

      {/* Conteúdo */}
      <ScrollView style={styles.content} contentContainerStyle={styles.contentContainer}>
        {/* Aba Clientes */}
        {activeTab === 'clientes' && (
          <>
            {clientes.length === 0 && !showForm && (
              <View style={styles.emptyState}>
                <Text style={styles.emptyStateText}>Nenhum Cliente encontrado</Text>
                <Text style={styles.emptyStateText}>e/ou cadastrado</Text>
              </View>
            )}

            {showForm && (
              <View style={styles.formContainer}>
                <Text style={styles.formTitle}>Cadastrar Cliente</Text>
                
                <View style={styles.inputGroup}>
                  <Text style={styles.inputLabel}>Nome</Text>
                  <TextInput
                    style={styles.input}
                    value={formData.nome}
                    onChangeText={(text) => setFormData({ ...formData, nome: text })}
                    placeholder="Digite o nome"
                  />
                </View>

                <View style={styles.inputGroup}>
                  <Text style={styles.inputLabel}>E-mail</Text>
                  <TextInput
                    style={styles.input}
                    value={formData.email}
                    onChangeText={(text) => setFormData({ ...formData, email: text })}
                    placeholder="Digite o e-mail"
                    keyboardType="email-address"
                  />
                </View>

                <View style={styles.inputGroup}>
                  <Text style={styles.inputLabel}>Telefone</Text>
                  <TextInput
                    style={styles.input}
                    value={formData.telefone}
                    onChangeText={(text) => setFormData({ ...formData, telefone: text })}
                    placeholder="Digite o telefone"
                    keyboardType="phone-pad"
                  />
                </View>

                <View style={styles.inputGroup}>
                  <Text style={styles.inputLabel}>ID do Cliente</Text>
                  <TextInput
                    style={styles.input}
                    value={formData.id}
                    onChangeText={(text) => setFormData({ ...formData, id: text })}
                    placeholder="Digite o ID"
                  />
                </View>

                <TouchableOpacity style={styles.concludeButton} onPress={handleConcluirCadastro}>
                  <Text style={styles.concludeButtonText}>Concluir cadastro</Text>
                </TouchableOpacity>
              </View>
            )}

            {!showForm && clientes.length > 0 && (
              <View style={styles.clientsListContainer}>
                {clientes.map((cliente, index) => (
                  <View key={index} style={styles.clientCard}>
                    <View style={styles.clientInfo}>
                      <Text style={styles.clientLabel}>Cliente:</Text>
                      <Text style={styles.clientValue}>{cliente.nome}</Text>
                    </View>
                    <View style={styles.clientInfo}>
                      <Text style={styles.clientLabel}>ID:</Text>
                      <Text style={styles.clientValue}>{cliente.id}</Text>
                    </View>
                  </View>
                ))}
              </View>
            )}

            <TouchableOpacity style={styles.addButton} onPress={handleAddClient}>
              <Text style={styles.addButtonText}>Adicionar Cliente</Text>
            </TouchableOpacity>
          </>
        )}

        {/* Aba Treino */}
        {activeTab === 'treino' && (
          <>
            {treinos.length === 0 && !showTreinoForm && (
              <View style={styles.emptyState}>
                <Text style={styles.emptyStateText}>Nenhum treino encontrado</Text>
                <Text style={styles.emptyStateText}>e/ou cadastrado</Text>
              </View>
            )}

            {showTreinoForm && (
              <View style={styles.formContainer}>
                <Text style={styles.formTitle}>Cadastro do Treino</Text>
                
                <View style={styles.inputGroup}>
                  <Text style={styles.inputLabel}>Nome do Treino</Text>
                  <TextInput
                    style={styles.input}
                    value={treinoFormData.nomeTreino}
                    onChangeText={(text) => setTreinoFormData({ ...treinoFormData, nomeTreino: text })}
                    placeholder="Digite o nome do treino"
                  />
                </View>

                <View style={styles.inputGroup}>
                  <Text style={styles.inputLabel}>Nome do Exercício</Text>
                  <TextInput
                    style={styles.input}
                    value={treinoFormData.nomeExercicio}
                    onChangeText={(text) => setTreinoFormData({ ...treinoFormData, nomeExercicio: text })}
                    placeholder="Digite o exercício"
                  />
                </View>

                <View style={styles.inputGroup}>
                  <Text style={styles.inputLabel}>Área trabalhada</Text>
                  <TextInput
                    style={styles.input}
                    value={treinoFormData.area}
                    onChangeText={(text) => setTreinoFormData({ ...treinoFormData, area: text })}
                    placeholder="Digite a área"
                  />
                </View>

                <View style={styles.treinoInputRow}>
                  <View style={styles.treinoInputSmall}>
                    <Text style={styles.inputLabel}>Peso</Text>
                    <TextInput
                      style={styles.input}
                      value={treinoFormData.peso}
                      onChangeText={(text) => setTreinoFormData({ ...treinoFormData, peso: text })}
                      placeholder=""
                      keyboardType="numeric"
                    />
                  </View>

                  <View style={styles.treinoInputSmall}>
                    <Text style={styles.inputLabel}>Séries</Text>
                    <TextInput
                      style={styles.input}
                      value={treinoFormData.series}
                      onChangeText={(text) => setTreinoFormData({ ...treinoFormData, series: text })}
                      placeholder=""
                      keyboardType="numeric"
                    />
                  </View>

                  <View style={styles.treinoInputSmall}>
                    <Text style={styles.inputLabel}>Repetição</Text>
                    <TextInput
                      style={styles.input}
                      value={treinoFormData.repeticao}
                      onChangeText={(text) => setTreinoFormData({ ...treinoFormData, repeticao: text })}
                      placeholder=""
                      keyboardType="numeric"
                    />
                  </View>
                </View>

                <TouchableOpacity style={styles.concludeButton} onPress={handleFinalizarTreino}>
                  <Text style={styles.concludeButtonText}>Finalizar Cadastro</Text>
                </TouchableOpacity>
              </View>
            )}

            {!showTreinoForm && treinos.length > 0 && (
              <View style={styles.treinosListContainer}>
                {treinos.map((treino, treinoIndex) => (
                  <View key={treinoIndex} style={styles.treinoCard}>
                    <Text style={styles.treinoCardTitle}>{treino.clienteNome}</Text>
                    {treino.exercicios.map((exercicio, exIndex) => (
                      <View key={exIndex} style={styles.exercicioItem}>
                        <Text style={styles.exercicioText}>
                          {exercicio.nomeExercicio} - {exercicio.series}x{exercicio.repeticao} ({exercicio.peso}kg)
                        </Text>
                      </View>
                    ))}
                  </View>
                ))}
              </View>
            )}

            <TouchableOpacity style={styles.addButton} onPress={handleAddTreino}>
              <Text style={styles.addButtonText}>Adicionar treino</Text>
            </TouchableOpacity>
          </>
        )}
      </ScrollView>

      {/* Bottom Navigation */}
      <View style={styles.bottomNav}>
        <TouchableOpacity 
          style={[styles.navButton, activeTab === 'clientes' && styles.navButtonActive]}
          onPress={() => setActiveTab('clientes')}
        >
          <Text style={[styles.navButtonText, activeTab === 'clientes' && styles.navButtonTextActive]}>
            Clientes
          </Text>
        </TouchableOpacity>

        <TouchableOpacity 
          style={[styles.navButton, activeTab === 'treino' && styles.navButtonActive]}
          onPress={() => setActiveTab('treino')}
        >
          <Text style={[styles.navButtonText, activeTab === 'treino' && styles.navButtonTextActive]}>
            Treino
          </Text>
        </TouchableOpacity>

        <TouchableOpacity 
          style={[styles.navButton, activeTab === 'sair' && styles.navButtonActive]}
          onPress={handleLogout}
        >
          <Text style={[styles.navButtonText, activeTab === 'sair' && styles.navButtonTextActive]}>
            Sair
          </Text>
        </TouchableOpacity>
      </View>
    </View>
  );
}
