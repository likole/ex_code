#include<iostream>
using namespace std;
int main()
{
	int height_apple[10], height_taotao;
	for (int i = 0; i < 10; i++)
	{
		cin >> height_apple[i];
	}
	cin >> height_taotao;
	int num = 0;
	for (int i = 0; i < 10; i++)
	{
		if (height_apple[i] <= height_taotao + 30)num++;
	}
	cout << num<<endl;
	//cin.get();
	//cin.get();
	return 0;
}