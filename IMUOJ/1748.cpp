#include<iostream>
#include<string>
#include<set>
#include<map>
#include<sstream>
using namespace std;
int main()
{
    set<string> words;
    map<string, int> word_count;
    char cmd;
    while (cin >> cmd)
    {
        if (cmd == 'X')break;
        if (cmd == 'T')
        {
            string str;
            getline(cin, str, '@');
            for (int i = 0; i < str.length(); i++)
            {
                if (str[i] >= 'A'&&str[i] <= 'Z')
                {
                    str[i] += 32;
                }
                else if (str[i] >= 'a'&&str[i] <= 'z')
                {
                }
                else
                {
                    str[i] = ' ';
                }
            }
            stringstream ss(str);
            string s;
            while (ss >> s)
            {
                words.insert(s);
                if (!word_count.count(s)) word_count[s] = 0;
                ++word_count[s];
            }
        }
        else if (cmd == 'S')
        {
            string str;
            while (cin >> str)
            {
                if (str == "#") break;
                words.erase(str);
                word_count[str] = 0;
            }
        }
        else if (cmd == 'V')
        {
            for (set<string>::iterator it = words.begin(); it != words.end(); ++it)
            {
                cout << *it << " " << word_count[*it] << endl;
            }
        }
        else if (cmd == 'Q')
        {
            string str;
            while (cin >> str)
            {
                if (str == "#")break;
                if (word_count.count(str) && word_count[str] != 0)
                {
                    cout <<str<<" "<< word_count[str] << endl;
                }
                else
                {
                    cout << "-1" << endl;
                }
            }
        }
    }
}