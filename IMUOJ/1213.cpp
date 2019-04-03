#include<iostream>
using namespace std;
int main()
{
	int n[4];
	for (int i = 0; i < 4; i++)
	{
		cin >> n[i];
	}
	for (int i = 0; i < 4; i++)
	{
		if (n[i] >= 0 && n[i] <= 100)
		{
			switch (n[i]/10)
			{
			case 10:
			case 9:
				cout << "A" << endl;
				break;
			case 8:
				cout << "B" << endl;
				break;
			case 7:
				cout << "C" << endl;
				break;
			case 6:
				cout << "D" << endl;
				break;
			default:
				cout << "E" << endl;
				break;
			}
		}
		else
		{
			cout << "Score is error!" << endl;;
		}
	}
	//cin.get();
	//cin.get();
	return 0;
}