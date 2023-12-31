import {
    ChatPromptTemplate,
    HumanMessagePromptTemplate,
    SystemMessagePromptTemplate,
  } from "langchain/prompts";
  import { LLMChain } from "langchain/chains";
  import { ChatOpenAI } from "langchain/chat_models/openai";
  
  // We can also construct an LLMChain from a ChatPromptTemplate and a chat model.
  const chat = new ChatOpenAI({ temperature: 0 });
  const chatPrompt = ChatPromptTemplate.fromPromptMessages([
    SystemMessagePromptTemplate.fromTemplate(
      "You are a helpful assistant that translates {input_language} to {output_language}."
    ),
    HumanMessagePromptTemplate.fromTemplate("{text}"),
  ]);
  const chainB = new LLMChain({
    prompt: chatPrompt,
    llm: chat,
  });
  
  const resB = await chainB.call({
    input_language: "Chinese",
    output_language: "Japanese",
    text: "早安，真是一個好天氣的日子！",
  });
  console.log({ resB });
  // { resB: { text: "J'adore la programmation." } }