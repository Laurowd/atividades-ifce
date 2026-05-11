import React, { useState } from 'react';
import { View, Text, TextInput, TouchableOpacity, KeyboardAvoidingView, Platform, ScrollView } from 'react-native';
import styles from '../styles/cadastro3';

interface CadastroEtapa3Props {
  onFinish?: (data: any) => void;
  onSkip?: () => void;
  onBack?: () => void;
}

export default function CadastroEtapa3({ onFinish, onSkip, onBack }: CadastroEtapa3Props) {
  const [horario, setHorario] = useState('');
  const [foco, setFoco] = useState('');

  const handleFinish = () => {
    if (onFinish) {
      onFinish({ horario, foco });
    } else {
      console.log('Cadastro Completo:', { horario, foco });
    }
  };

  const handleSkip = () => {
    if (onSkip) {
      onSkip();
    } else {
      console.log('Pulou Etapa 3');
    }
  };

  const horarios = ['Manhã (6h-12h)', 'Tarde (12h-18h)', 'Noite (18h-22h)', 'Flexível'];
  const focos = [
    'Perda de peso',
    'Ganho de massa muscular',
    'Condicionamento físico',
    'Fortalecimento',
    'Flexibilidade',
    'Saúde geral'
  ];

  return (
    <KeyboardAvoidingView 
      behavior={Platform.OS === 'ios' ? 'padding' : 'height'}
      style={styles.container}
    >
      <ScrollView contentContainerStyle={styles.scrollContent}>
        {/* Botão Pular */}
        <TouchableOpacity style={styles.skipButton} onPress={handleSkip}>
          <Text style={styles.skipButtonText}>Pular</Text>
        </TouchableOpacity>

        <View style={styles.content}>
          {/* Header */}
          <View style={styles.header}>
            <Text style={styles.title}>FitSync</Text>
            <Text style={styles.stepIndicator}>Etapa 3 de 3</Text>
            <Text style={styles.subtitle}>Preferências de treino</Text>
          </View>

          {/* Formulário */}
          <View style={styles.form}>
            <View style={styles.inputContainer}>
              <Text style={styles.label}>Qual horário deseja que seus treinos sejam realizados?</Text>
              <View style={styles.optionsContainer}>
                {horarios.map((h) => (
                  <TouchableOpacity
                    key={h}
                    style={[styles.optionButton, horario === h && styles.optionButtonSelected]}
                    onPress={() => setHorario(h)}
                  >
                    <Text style={[styles.optionButtonText, horario === h && styles.optionButtonTextSelected]}>
                      {h}
                    </Text>
                  </TouchableOpacity>
                ))}
              </View>
            </View>

            <View style={styles.inputContainer}>
              <Text style={styles.label}>Qual é o foco dos seus treinos?</Text>
              <View style={styles.optionsContainer}>
                {focos.map((f) => (
                  <TouchableOpacity
                    key={f}
                    style={[styles.optionButton, foco === f && styles.optionButtonSelected]}
                    onPress={() => setFoco(f)}
                  >
                    <Text style={[styles.optionButtonText, foco === f && styles.optionButtonTextSelected]}>
                      {f}
                    </Text>
                  </TouchableOpacity>
                ))}
              </View>
            </View>

            <View style={styles.buttonRow}>
              {onBack && (
                <TouchableOpacity style={styles.backButton} onPress={onBack}>
                  <Text style={styles.backButtonText}>Voltar</Text>
                </TouchableOpacity>
              )}
              <TouchableOpacity style={styles.finishButton} onPress={handleFinish}>
                <Text style={styles.finishButtonText}>Finalizar</Text>
              </TouchableOpacity>
            </View>
          </View>
        </View>
      </ScrollView>
    </KeyboardAvoidingView>
  );
}
